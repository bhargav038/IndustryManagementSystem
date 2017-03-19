function formValidation(){
			var userName = document.getElementById("idUsername").value;
			var firstName = document.getElementById("idfirstName").value;
			var lastName = document.getElementById("idlastName").value;
			var dobMM = document.getElementById("idMonth");
			var dobDT = document.getElementById("idDate");
			var dobYYYY = document.getElementById("idYear");
			var maleGender = document.getElementById("idMaleGender");
			var femaleGender = document.getElementById("idFemaleGender");
			var mobileNumber = document.getElementById("idMobileNumber").value;
			var password = document.getElementById("idPassword").value;
			var confirmPassword = document.getElementById("idConfirmPassword").value;
			var tin = document.getElementById("idTin").value;
			var answer = document.getElementById("idAnswer").value;
			
		 
			if(userName_validation(userName,5,12)){
				if(firstName_validation(firstName)){
					if(lastName_validation(lastName)){
						if(dob_validation()){
							if(password_validation()){
								if(tin_validation(tin)){
									if(mobile_validation(mobileNumber)){
										if(gender_validation(maleGender,femaleGender)){
											if(securityAnswerValidation()){
												
											}
										}
									}
								}
							}
						}
					}
				
				}	
			
			return false;
			}
		
				function userName_validation(userName,mx,my){
					var userName_length = userName.length; 
					if (userName_length == 0 || userName_length >= my || userName_length < mx)  
						{  
							alert("User Id should not be empty / length be between "+mx+" to "+my);  
						
							return false;  
						}  
						return true;  

					} //end function userName_validation
					
				
				function firstName_validation(firstName){
					var letters_first = (/^[A-Za-z]+$/); 
					if(firstName.match(letters_first))  
					{  
						return true;  
					}  
					else  
					{  
						alert("Please enter all the characters as alpabets in FirstName field");  
						return false;  
					}  
				}  //end function userName_validation
				
				function lastName_validation(lastName){
					var letters_last = (/^[A-Za-z]+$/);
					if(lastName.match(letters_last))
					{
						return true;
					}
					else 
					{
						alert("Please enter all the characters as alphabets in LastName field");
					}
				} // end function lastName_validation
				
				function dob_validation(){
					var dobMMlength = dobMM.length;
					var dobDTlength = dobDT.length;
					var dobYYYYlength = dobYYYY.length;
					if(dobMMlength >= 2 && dobDTlength >= 2 && dobYYYYlength >= 4){
						window.alert("Please enter the valid the date format");
						return false;
					}
					else if(dobMM>=13 && dobDT >= 31 && dobYYYY <= 1900 && dobYYYY >= 2017){
						window.alert("please enter the valid month,date and years in the field");
						return false;
					}
					
					else{
						return true;
					}
				}
				
				function password_validation(){
					var password = document.getElementById("idPassword").value;
					var confirmPassword = document.getElementById("idConfirmPassword").value;
					var confirmPassword = document.getElementById("idConfirmPassword").value;
		
					var password_length = password.length;
					var confirmPassword_length = confirmPassword.length;
		
					if(password_length != 0 || password_length >= 8 ){
						if(password == confirmPassword){
						return true;
						}else {
							window.alert("password and confirm passwrod should be same");
						}
					} else {
					window.alert("password field should not be empty or password field should have a minimum of 8 characters");
					}
		
				}//end function password_validation
				
				function tin_validation(tin){
					var letters_tin = (/^[A-Za-z]+$/);
					if(tin.match(letters_tin))
					{
						return true;
					}
					else 
					{
						alert("please enter valid TIN number");
					}
				}
				
				function mobile_validation(mobileNumber){
					
					
					if(!isNaN(mobileNumber))
					{
							mobileNumber_length = mobileNumber.length;
						if(mobileNumber_length == 10)
						{
							return true;
						}
						else
						{
						window.alert("Please enter 10 numbers in the text field");
						}
					return true;
					}
					else
					{
					window.alert("Please enter numbers only");
					return false;
					}
					
				} //end function mobile_validation
				
				function gender_validation(maleGender,femaleGender){
					var x = 0;
					if(maleGender.checked){
						x++;
					}
					if(femaleGender.checked){
						x++;
					}
					if(x == 0){
						window.alert("Please check the gender field");
						return false;
					}
					
					else{
						
						return true;
					}
				
				}//end function gender_validation			
				
				
				
				function securityValidation(){
		
					var e = document.getElementById("dropDown");
					var optionSelIndex = e.options[e.selectedIndex].value;
					
					
					var optionSelectedText = e.options[e.selectedIndex].text;
				
					if (optionSelIndex == "birthPlace") {
					
						var getAnswerColor = document.getElementById("idAnswer").value;
						return true;
					}
					else if(optionSelIndex == "Licence"){
						var getAnswerPlace = document.getElementById("idAnswer").value;
						return true;
					}
					
					else if(optionSelIndex == "Default"){
						alert("Please select a question");
						return false;
					}
				
					else{
						return true;
					}
				} //end function securityValidation

				function securityAnswerValidation(){
					
					var securityAnswer = document.getElementById("idAnswer").value;
					
					if(securityAnswer == ""){
					
						window.alert("Please fill the answer field also:");
						
					} else {
					
						window.alert("The form is submitted successfully")
						
					}
				} //end function securityAnswerValidation
}