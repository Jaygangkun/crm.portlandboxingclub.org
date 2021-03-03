var orders = [];
var orders_count = 0;

async function importOrders(){
    orders_count = orders.length;
    for(var oindex = 0; oindex < orders_count; oindex ++){
        jQuery('#import_status').text("( " + (oindex + 1) + " / " + orders_count +" )")
        await importOneOrder(oindex);
    }
    alert('Imported:' + orders_count);
    jQuery('body').removeClass('loading');
}

async function importOneOrder(oindex){

    var found_contacts = await findContactsByEmail(oindex);
    var contribute_data = {};
    if(found_contacts.count == 0){
        contribute_data = await createContact(oindex);        
    }
    else{
        contribute_data = {
            oindex: oindex,
            contact_id: found_contacts[0]['id']
        }
    }

    var stateProvince_data = await findStateProvince(contribute_data);

    var found_address = await findAddress({oindex : oindex, contact_id: contribute_data.contact_id});
    if(found_address.count == 0){
        await createAddress({oindex : oindex, contact_id: contribute_data.contact_id, state_province_id: stateProvince_data.state_province_id});
    }
    

    if(orders[oindex]['billingAddress']['phone'] != ''){
        var found_phones = await findPhone({oindex: oindex, contact_id: contribute_data.contact_id, phone: orders[oindex]['billingAddress']['phone']});
        if(found_phones.count == 0){
            await createPhone({oindex : oindex, contact_id: contribute_data.contact_id});
        }
        
    }
    
    if(orders[oindex]['customerEmail'] != ''){
        var found_emails = await findEmail({oindex: oindex, contact_id: contribute_data.contact_id, email: orders[oindex]['customerEmail']});
        if(found_emails.count == 0){
            await createEmail(contribute_data);
        }
    }    

    var found_contributions = await findContribute({oindex: oindex, contact_id: contribute_data.contact_id});
    if(found_contributions.count == 0){
        createContribute(contribute_data);
    }
    
}

function findContactsByEmail(oindex){
    return new Promise((resolve, reject) => {
        CRM.api4('Contact', 'get', {
            join: [["Email AS email", false]],
            where: [["email.email", "=", orders[oindex]['customerEmail']]],
            limit: 25
        }).then(function(contacts) {
            // do something with contacts array
            console.log('findContactsByEmail:', oindex, contacts)
            resolve(contacts);
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function createContact(oindex){
    return new Promise((resolve, reject) => {
        CRM.api4('Contact', 'create', {
            values: {
                "contact_type":"Individual", 
                "first_name": orders[oindex]['billingAddress']['firstName'],
                "last_name": orders[oindex]['billingAddress']['lastName'],
            }
        }).then(function(results) {
            // do something with results array
            console.log('createContact:', oindex);
            resolve({oindex: oindex, contact_id: results[0].id});
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function findEmail(data){
    return new Promise((resolve, reject) => {
        CRM.api4('Email', 'get', {
            where: [
                ["location_type_id:name", "=", "Main"], 
                ["email", "=", data.email], 
                ["contact.id", "=", data.contact_id]
            ],
            limit: 25
        }).then(function(emails) {
            // do something with emails array
            resolve(emails);
        }, function(failure) {
            // handle failure
            reject()
        });
    });
}

function createEmail(data){
    return new Promise((resolve, reject) => {
        CRM.api4('Email', 'create', {
            values: {
                "email": orders[data.oindex]['customerEmail'], 
                "location_type_id:name": 'Main',
                "is_primary": true, 
                "contact_id": data.contact_id
            }
        }).then(function(results) {
            // do something with results array
            console.log('createEmail:', data, results);
            resolve();
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function findStateProvince(data){
    return new Promise((resolve, reject) => {
        CRM.api4('StateProvince', 'get', {
            where: [
                ["abbreviation", "=", orders[data.oindex]['billingAddress']['state']], 
                ["country.iso_code", "=", orders[data.oindex]['billingAddress']['countryCode']]
            ],
            limit: 25
        }).then(function(stateProvinces) {
            console.log('findStateProvince:', data, stateProvinces);
            // do something with stateProvinces array
            if(stateProvinces.length > 0){
                resolve({oindex: data.oindex, state_province_id: stateProvinces[0].id });
            }
            else{
                resolve({oindex: data.oindex, state_province_id: null });
            }
            
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function findAddress(data){
    return new Promise((resolve, reject) => {
        CRM.api4('Address', 'get', {
            where: [
                ["contact.id", "=", data.contact_id], 
                ["location_type_id:name", "=", "Billing"]
            ],
            limit: 25
        }).then(function(addresses) {
            // do something with addresses array
            resolve(addresses);
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function createAddress(data){
    return new Promise((resolve, reject) => {
        CRM.api4('Address', 'create', {
            values: {
                "contact_id": data.contact_id, 
                "location_type_id:name": "Billing", 
                "supplemental_address_1": orders[data.oindex]['billingAddress']['address1'], 
                "supplemental_address_2": orders[data.oindex]['billingAddress']['address2'], 
                "city": orders[data.oindex]['billingAddress']['city'], 
                "postal_code": orders[data.oindex]['billingAddress']['postalCode'], 
                "state_province_id": data.state_province_id
            }
        }).then(function(results) {
            console.log('createAddress:', data, results);
            // do something with results array
            resolve();
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function findPhone(data){
    return new Promise((resolve, reject) => {
        CRM.api4('Phone', 'get', {
            where: [
                ["contact.id", "=", data.contact_id], 
                ["location_type_id:name", "=", "Billing"], 
                ["phone", "=", data.phone]
            ],
            limit: 25
        }).then(function(phones) {
            // do something with phones array
            resolve(phones);
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function createPhone(data){
    return new Promise((resolve, reject) => {
        CRM.api4('Phone', 'create', {
            values: {
                "contact_id": data.contact_id, 
                "phone": orders[data.oindex]['billingAddress']['phone'],
                "location_type_id:name" : 'Billing'
            }
        }).then(function(results) {
            // do something with results array
            console.log('createPhone:', data, results)
            resolve();
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function findContribute(data){
    return new Promise((resolve, reject) => {
        CRM.api4('Contribution', 'get', {
            where: [
                ["contact.id", "=", data.contact_id], 
                ["invoice_id", "=", orders[data.oindex]['id']], 
                ["receive_date", "=", orders[data.oindex]['createdOn']], 
                ["financial_type_id:name", "=", "Store Purchase"], 
                ["source", "=", "Squarespace"]
            ],
            limit: 25
          }).then(function(contributions) {
            // do something with contributions array
            resolve(contributions);
          }, function(failure) {
            // handle failure
            reject();
          });
    });
}

function createContribute(data){
    return new Promise((resolve, reject) => {
        CRM.api4('Contribution', 'create', {
            values: {
                "contact_id": data.contact_id,
                "financial_type_id:name": "Store Purchase", 
                "total_amount": orders[data.oindex]['grandTotal']['value'], 
                "source": "Squarespace", 
                "contribution_status_id:name": "Completed", 
                "receive_date": orders[data.oindex]['createdOn'], 
                "payment_instrument_id:name": "Credit Card", 
                "invoice_id": orders[data.oindex]['id'], 
            }
        }).then(function(results) {
            console.log('created new contribute', results) ;
            resolve();
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function checkDateFormat(strDate){

    if(/^[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}$/.test(strDate.trim())){
        return true;
    }
    else{
        return false;
    }
}

var now_dt = new Date();

// if(jQuery('#modified_before').length > 0){
//     jQuery('#modified_before').val(now_dt.getFullYear() + '-' + (now_dt.getMonth() + 1) + '-' + now_dt.getDate() + ' ' + now_dt.getHours() + ':' + now_dt.getMinutes() + ':' + now_dt.getSeconds());
// }

jQuery(document).on('click', '#btn_import_squarespace', function(){
    if(jQuery('#squarespace_api_key').val() == ''){
      alert('Please Input Api key');
      jQuery('#squarespace_api_key').focus();
      return;
    }
  
    if(jQuery('#modified_after').val() == '' && jQuery('#modified_before').val() == ''){
        
    }
    else{
        if(jQuery('#modified_after').val() == ''){
            alert('Please Input Modifed After');
            jQuery('#modified_after').focus();
            return;
        }
        
        if(!checkDateFormat(jQuery('#modified_after').val())){
            alert('Please Input Correct format of Modifed After. YYYY-MM-DD hh:mm:ss');
            jQuery('#modified_after').focus();
            return;
        }

        if(jQuery('#modified_before').val() == ''){
            alert('Please Input Modifed Before');
            jQuery('#modified_before').focus();
            return;
        }

        if(!checkDateFormat(jQuery('#modified_before').val())){
            alert('Please Input Correct format of Modifed Before. YYYY-MM-DD hh:mm:ss');
            jQuery('#modified_before').focus();
            return;
        }
    }
  
    jQuery('body').addClass('loading');
    jQuery('#import_status').text('Getting Data...');
    jQuery.ajax({
      url: api_url,
      type: 'post',
      data: {
        api_key: jQuery('#squarespace_api_key').val(),
        modified_before: jQuery('#modified_before').val().trim(),
        modified_after: jQuery('#modified_after').val().trim(),
      },
      success: function(resp){
        resp = JSON.parse(resp);
        if(resp.success){
            orders = resp['orders'];
            importOrders();
        }
        else{
            jQuery('body').removeClass('loading');
            alert("Can't get Data from Squarespace!");
        }
        
      }
    })
})