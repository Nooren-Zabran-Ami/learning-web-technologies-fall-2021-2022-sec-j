var operator = document.getElementsByClassName("operator");
for(var i =0;i<operator.length;i++){
		if(this.id=="clear"){
			printHistory("");
			printOutput("");
		}
        else if(this.id=="backspace"){
			var output=reverseNumberFormat(getOutput()).toString();
			if(output){
				output= output.substr(0,output.length-1);
				printOutput(output);
			}


var number = document.getElementsByClassName("number");
    for(var i =0;i<number.length;i++){
        number[i].addEventListener('click',function(){
        var output=reverseNumberFormat(getOutput());
            if(output!=NaN){ 
                output=output+this.id;
                printOutput(output);
                }
            });
        }