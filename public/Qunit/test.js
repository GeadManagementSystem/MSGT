QUnit.test( "Calculate change due function", function( assert ) {
      let value = calculate_change_due(100,1000);
      let expected_result =900 ;
      assert.equal( value, expected_result, "We expect value to be 900" );
    });

QUnit.test( "Calculate total amount adding vat and discount percentages", function( assert ) {
      let value = calculate_final_total_ammount(1000,10,10);
      let expected_result =1000 ;
      assert.equal( value, expected_result, "We expect value to be 1000" );
    });