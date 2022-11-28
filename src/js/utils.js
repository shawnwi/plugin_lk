/*
 *  function_run used for running
 */

const function_run = (input) => {
  console.log(input);
	let layout = input["id"]+"";
	if(
		input['layout'] !== undefined
		&&
		input["layout"] !== input["id"]+"_default"
	){
		layout = input["layout"];
	}//end if
	console.log('layout = ', layout);
	var fn = funcs[layout];
	if (typeof fn === "function") return fn(input);

	const element = document.createElement('p');
	element.innerHTML = `JavaScript Building. Sass Building. Testing with [${input.id}]. Your custom layout does not exist or configured incorrectly`;
	return element;
};

module.exports = function_run;


//new fucntion is here


//start calendar
/*
$(document).ready(function(){
	//var disabledDays = ["2022-7-28"];
	//var tips = ['some description1'];
	$('#mdp').multiDatesPicker({
	//maxPicks: 5,
	
	altField: '#mdp-value',
	dateFormat: "dd-mm-yy",
	minDate: 0,
	//maxDate: "+12M",
	//addDisabledDates: ['25-09-12' , '26-09-12' , '27-09-12'],
	beforeShowDay: $.datepicker.noWeekends,
	beforeShowDay: function (date) {
        var m = String(date.getMonth() + 1).padStart(2, '0');
            d = String(date.getDate()).padStart(2, '0');
            y = date.getFullYear();
			daysInMonth = new Date(y, m, 0).getDate();
			classname_new = y + "" + m + "" + d;
        for (var i = 0; i < daysInMonth; i++) {
            //if ($.inArray(y + '-' + (m + 1) + '-' + d, disabledDays) != -1) {
            //    return [true, 'highlight ' + classname_new ,''];
            //}
			return [true, "class_" + classname_new ,''];
        }
        return [true];
    },
	mode: 'daysRange',
	autoselectRange: [0,10],
	onSelect: function(dateText) {
        console.log("Selected date: " + dateText + "; input's current value: " + this.value);
		var count = $(this).val().split(',').length;
		$("#toptitle").text(count + ' selected');
		
    }
	});



	


	$(".answer").hide();
$(".coupon_question").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show(500);
    } else {
        
		$('custom_rice_white').val('');
		$('custom_rice_brown').val('');
		$(".answer").hide(500);
    }
});

*/



	

//}); //end document ready
