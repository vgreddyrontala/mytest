<script>
//your code
var countries = {};

countries.results = 
[{"question_tag":"REFSYMWK","answer":1,"drug_id":4,"question_id":16,"option_sequence":"","survey_id":1},{"question_tag":"WKABSENT","answer":"rrr","drug_id":4,"question_id":18,"option_sequence":17,"survey_id":1},{"question_tag":"WKABSEHR","answer":"gg","drug_id":4,"question_id":19,"option_sequence":18,"survey_id":1}];
// solution:
//function to remove a value from the json array
function removeItem(obj, prop, val) {
    var c, found=false;
    for(c in obj) {
        if(obj[c][prop] == val) {
            found=true;
            break;
        }
    }
    if(found){
        delete obj[c];
    }
}

//example: call the 'remove' function to remove an item by id.
removeItem(countries.results,'question_id','16');
console.log(countries.results);


data = countries.results.filter(function(x) { return x !== null }); 
console.log("data: " + JSON.stringify(data));
//example2: call the 'remove' function to remove an item by name.
//removeItem(countries.results,'name','Albania');

// print our result to console to check it works !
for(c in countries.results) {
    console.log(countries.results[c].question_id + "---" +countries.results[c].answer);
}
</script>

<?php
  $array = '35305,35308,35539,35542,35685,35686,36313,38465,38631,38636,38807,38827,38848';
  $exp_data= explode(',',$array);
 echo count($exp_data);
 echo "<br>".date('Y-m-d', strtotime('0000-00-00'));
//177
 //19873,31557,34460
 //10207,10265,10277,10292,11015,11017,11021,11243,11245,11246,11247,11249,11260,11264,11269,11271,11541,11545,11549,11552,14866,14869,14871,14897,14898,14940,14941,14942,14944,14976,15621,15623,19873,19917,19946,19990,19991,19992,19993,19994,19995,19996,19997,19999,20000,20405,20407,20408,21355,21360,21361,22791,22792,22862,28987,28989,28990,28991,31557,31649,31686,31727,34458,34460,35292
 
 //178
   //$array = '8883,8887,9868,10122,10153,11232,11248,11258,11555,11558,11960,11961,12020,12025,12112,12113,12114,12115,12463,12464,12474,12489,12491,12570,12571,12572,15429,15430,17811,17812,17813,17814,17815,17838,18312,18320,18367,18428,18469,19184,19185,19186,19187,19188,19189,19248,19345,19347,19357,19376,20420,20421,20423,20454,32587,32588,32589,32590,32592,52981,52982,52983,52984,52985,52986,55810,55813,55880,56018,56317,63688,63690';
//17811,17812,17813,17814,17815,20420,20421,32587,32590,32589,32588

 //'8883,8887,9868,9898,9906,10122,10153,11232,11248,11258,11555,11558,11960,11961,12020,12025,12037,12112,12113,12114,12115,12463,12464,12474,12489,12491,12492,12570,12571,12572,15429,15430,17811,17812,17813,17814,17815,17838,18312,18320,18367,18428,18469,19184,19185,19186,19187,19188,19189,19248,19345,19347,19357,19376,20420,20421,20423,20454,32587,32588,32589,32590,32592,52981,52982,52983,52984,52985,52986,55810,55813,55880,56018,56317,63688,63689,63690';

 //9898,9906,12037,12492,63689
 //9908,17863,42518,42519,42520,42521,57111
?>