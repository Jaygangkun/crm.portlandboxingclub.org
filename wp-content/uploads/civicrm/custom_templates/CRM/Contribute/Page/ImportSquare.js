var orders = [];
var orders_count = 0;
var customers = {};

async function importOrders(){
    orders_count = orders.length;
    for(var oindex = 0; oindex < orders_count; oindex ++){
        jQuery('#import_status').text("( " + (oindex + 1) + " / " + orders_count +" )")

        for(var tindex = 0; tindex < orders[oindex].tenders.length; tindex++){
            let customer_id = orders[oindex]['tenders'][tindex]['customer_id'];

            if(customers.hasOwnProperty(customer_id)){
                if(customers[customer_id]['email_address'] != ''){
                    await importOneOrder(orders[oindex]['tenders'][tindex], customers[customer_id]['customer']);
                }
            }
        }
        
    }
    alert('Imported:' + orders_count);
    jQuery('body').removeClass('loading');
}

async function importOneOrder(tender, customer){
    var found_contacts = await findContactsByEmail(tender, customer);
    var contribute_data = {};
    if(found_contacts.count == 0){
        contribute_data = await createContact(tender, customer);        
    }
    else{
        contribute_data = {
            tender: tender,
            customer: customer,
            contact_id: found_contacts[0]['id']
        }
    }

    if(customer.hasOwnProperty('address')){
        // var stateProvince_data = await findStateProvince(contribute_data);

        var found_address = await findAddress({tender : tender, customer: customer, contact_id: contribute_data.contact_id});
        if(found_address.count == 0){
            await createAddress({tender : tender, customer: customer, contact_id: contribute_data.contact_id});
        }
    }   
    

    if(customer.hasOwnProperty('phone_number') && customer['phone_number'] != ''){
        var found_phones = await findPhone({tender: tender, customer: customer, contact_id: contribute_data.contact_id, phone: customer['phone_number']});
        if(found_phones.count == 0){
            await createPhone({tender: tender, customer: customer, contact_id: contribute_data.contact_id});
        }
        
    }
    
    if(customer.hasOwnProperty('email_address') && customer['email_address'] != ''){
        var found_emails = await findEmail({tender: tender, customer: customer, contact_id: contribute_data.contact_id, email: customer['email_address']});
        if(found_emails.count == 0){
            await createEmail(contribute_data);
        }
    }    

    var found_contributions = await findContribute({tender: tender, customer: customer, contact_id: contribute_data.contact_id});
    if(found_contributions.count == 0){
        createContribute(contribute_data);
    }
    
}

function findContactsByEmail(tender, customer){
    return new Promise((resolve, reject) => {
        CRM.api4('Contact', 'get', {
            join: [["Email AS email", false]],
            where: [["email.email", "=", customer['email_address']]],
            limit: 25
        }).then(function(contacts) {
            // do something with contacts array
            console.log('findContactsByEmail:', tender, customer)
            resolve(contacts);
        }, function(failure) {
            // handle failure
            reject();
        });
    });
}

function createContact(tender, customer){
    return new Promise((resolve, reject) => {
        CRM.api4('Contact', 'create', {
            values: {
                "contact_type":"Individual", 
                "first_name": customer['family_name'],
                "last_name": customer['given_name'],
            }
        }).then(function(results) {
            // do something with results array
            console.log('createContact:', tender, customer);
            resolve({tender: tender, customer: customer, contact_id: results[0].id});
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
                "email": data.customer['email_address'], 
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
                ["location_type_id:name", "=", "Home"]
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
                "location_type_id:name": "Home", 
                "supplemental_address_1": data.customer['address']['address_line_1'], 
                "supplemental_address_2": data.customer['address']['address_line_2'], 
                "city": data.customer['address']['locality'], 
                "postal_code": data.customer['address']['postal_code'], 
                // "state_province_id": data.state_province_id
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
                ["location_type_id:name", "=", "Home"], 
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
                "phone": customer['phone_number'],
                "location_type_id:name" : 'Home'
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
                ["invoice_id", "=", data.tender['id']], 
                ["receive_date", "=", data.tender['created_at']], 
                ["financial_type_id:name", "=", "Store Purchase"], 
                ["source", "=", "Square"]
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
                "total_amount": data.tender['amount_money']['amount'] / 100, 
                "source": "Square", 
                "contribution_status_id:name": "Completed", 
                "receive_date": data.tender['created_at'], 
                "payment_instrument_id:name": "Credit Card", 
                "invoice_id": data.tender['id'], 
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

    if(/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/.test(strDate.trim())){
        return true;
    }
    else{
        return false;
    }
}


jQuery(document).on('click', '#btn_import_square', function(){
    if(jQuery('#square_token').val() == ''){
      alert('Please Input Access Token');
      jQuery('#square_token').focus();
      return;
    }

    if(jQuery('#start_at').val() == ''){
        alert('Please Input Start At');
        jQuery('#start_at').focus();
        return;
    }
    
    if(!checkDateFormat(jQuery('#start_at').val())){
        alert('Please Input Correct format of Start After. YYYY-MM-DD');
        jQuery('#start_at').focus();
        return;
    }

    if(jQuery('#end_at').val() == ''){
        alert('Please Input End At');
        jQuery('#end_at').focus();
        return;
    }

    if(!checkDateFormat(jQuery('#end_at').val())){
        alert('Please Input Correct format of End At. YYYY-MM-DD');
        jQuery('#end_at').focus();
        return;
    }
  
    jQuery('body').addClass('loading');
    jQuery('#import_status').text('Getting Data...');
    jQuery.ajax({
      url: api_url,
      type: 'post',
      data: {
        token: jQuery('#square_token').val(),
        start_at: jQuery('#start_at').val(),
        end_at: jQuery('#end_at').val(),
      },
      success: function(resp){
        resp = JSON.parse(resp);
        if(resp.success){
            orders = resp['orders'];
            customers = resp['customers'];
            importOrders();
        }
        else{
            jQuery('body').removeClass('loading');
            alert("Can't get Data from Square!");
        }
        
      }
    })
})