jQuery(document).on('click', '#btn_import_squarespace', function(){
    if(jQuery('#squarespace_api_key').val() == ''){
      alert('Please Input Api key');
      jQuery('#squarespace_api_key').focus();
      return;
    }
  
    var donations = [];
    var donations_count = 5;
  
    async function importDonations(){
        donations_count = donations.length;
        for(var dindex = 0; dindex < donations_count; dindex ++){
            jQuery('#import_status').text("( " + (dindex + 1) + " / " + donations_count +" )")
            await importOneDonation(dindex);
        }
        alert('Imported:' + donations_count);
        jQuery('body').removeClass('loading');
    }

    async function importOneDonation(dindex){
        var create_contact_data = await createContact(dindex);
        var create_email_data = await createEmail(create_contact_data);
        createContribute(create_email_data);
    }
  
    function createContact(dindex){
        return new Promise((resolve, reject) => {
            CRM.api4('Contact', 'create', {
                values: {
                    "contact_type":"Individual", 
                    "first_name":"Jay_Squarespace_Test"
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
                    "email": donations[data.dindex]['customerEmail'], 
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
                    "total_amount": donations[data.dindex]['total']['value'], 
                    "source": "Squarespace Test", 
                    "currency": donations[data.dindex]['total']['currency'], 
                    "receive_date": donations[data.dindex]['createdOn']
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
        api_key: jQuery('#squarespace_api_key').val()
      },
      success: function(resp){
        resp = JSON.parse(resp);
        if(resp.success){
            donations = resp['donations'];
            importDonations();
        }
        else{
            jQuery('body').removeClass('loading');
            alert("Can't get Data from Squarespace!");
        }
        
      }
    })
})