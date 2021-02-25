jQuery(document).on('click', '#btn_import_square', function(){
    if(jQuery('#square_token').val() == ''){
      alert('Please Input Access Token');
      jQuery('#square_token').focus();
      return;
    }
  
    var orders = [];
    var orders_count = 5;
  
    async function importOrders(){
        orders_count = orders.length;
        for(var dindex = 0; dindex < orders_count; dindex ++){
            jQuery('#import_status').text("( " + (dindex + 1) + " / " + orders_count +" )")
            await importOneOrder(dindex);
        }
        alert('Imported:' + orders_count);
        jQuery('body').removeClass('loading');
    }

    async function importOneOrder(dindex){
        var create_contact_data = await createContact(dindex);
        // var create_email_data = await createEmail(create_contact_data);
        createContribute(create_contact_data);
    }
  
    function createContact(dindex){
        return new Promise((resolve, reject) => {
            CRM.api4('Contact', 'create', {
                values: {
                    "contact_type":"Individual", 
                    "first_name":"Jay_Square_Test"
                }
            }).then(function(results) {
                // do something with results array
                resolve({dindex: dindex, contact_id: results[0].id});
            }, function(failure) {
            // handle failure
            });
        });
    }

    function createEmail(data){
        return new Promise((resolve, reject) => {
            CRM.api4('Email', 'create', {
                values: {
                    "email": '', 
                    "location_type_id": 3, // Main
                    "is_primary":true, 
                    "contact_id":data.contact_id
                }
            }).then(function(results) {
                // do something with results array
                resolve({dindex: data.dindex, contact_id: data.contact_id, });
            }, function(failure) {
                // handle failure
            });
        });
    }

    function createContribute(data){
        return new Promise((resolve, reject) => {
            CRM.api4('Contribution', 'create', {
                values: {
                    "financial_type_id": 1,  // Donation
                    "contact_id": data.contact_id, 
                    "total_amount": orders[data.dindex]['total_money']['amount'] / 100, 
                    "source": "Square Test", 
                    "currency": orders[data.dindex]['total_money']['currency'], 
                    "receive_date": orders[data.dindex]['created_at']
                }
            }).then(function(results) {
                console.log('created new contribute', results) ;
            }, function(failure) {
            // handle failure
            });
        });
    }
  
    jQuery('body').addClass('loading');
    jQuery('#import_status').text('Getting Data...');
    jQuery.ajax({
      url: api_url,
      type: 'post',
      data: {
        token: jQuery('#square_token').val()
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