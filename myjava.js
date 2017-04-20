var $jq = jQuery.noConflict();
$jq(document).ready(function() {
	//Varry
	var handle = $jq( "#varry" );
    $jq( "#slider" ).slider({
      min: 0,
      max: 100000,
      create: function() {
        handle.text( $jq( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        handle.text( ui.value );
      }
    });
    // Down Payment
    var handle = $jq( "#varry" );
    $jq( "#slider" ).slider({
      min: 0,
      max: 100000,
      create: function() {
        handle.text( $jq( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        handle.text( ui.value );
      }
    });
    //Interest
    var handle1 = $jq( "#int_label" );
    $jq( "#interest" ).slider({
      min: 5,
      max: 20,
      create: function() {
        handle1.text( $jq( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        handle1.text( ui.value );
      }
    });
    //Years
    var handle2 = $jq( "#yrs_label" );
    $jq( "#years" ).slider({
      min: 0,
      max: 30,
      create: function() {
        handle2.text( $jq( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        handle2.text( ui.value );
      }
    });
	 //Calculate
    var property_value = $jq("#user_input").val(),
        down_payment = $jq("#varry").text(),
        interest = $jq( "#int_label" ).text(),
        yrs = $jq( "#yrs_label" ).text();

    //Detect and take user input
    $jq("#user_input").change(function det_user_input(){
          property_value = $jq("#user_input").val()
        }
      );
    //Detect and take DownPayment
    $jq( "#slider" ).on( "slide", function( event, ui ) {
          down_payment = $jq( "#varry" ).text()
        }
      );
    //Detect and take interest slider value
    $jq( "#interest" ).on( "slide", function( event, ui ) {
          interest = $jq( "#int_label" ).text()
        }
      );
	
	//Detect and take no of years
    $jq( "#years" ).on( "slide", function( event, ui ) {
          yrs = $jq( "#yrs_label" ).text()
        }
      );
    //Main Calculator
    $jq("#button").click(function gen(){
        interest = $jq( "#int_label" ).text();
        down_payment = $jq( "#varry" ).text();
        yrs = $jq( "#yrs_label" ).text();

    var  m_i = interest/1200
    var  m_no = yrs*12
    var  mortage = property_value - down_payment

    var m_p = (mortage*Math.pow((1+m_i),m_no)*m_i)/(Math.pow((1+m_i),m_no)-1);


    $jq("#amount_monthly").text(m_p.toFixed(2));
    $jq("#amount_monthly").prepend('<b>kshs: </b>');
      }
    )
});

 