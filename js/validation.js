 ///function for validating the student form///
 function valid_student(frm_obj)
 {
	 if(frm_obj.st_name.value=="")
	 {
		alert("please enter your name")
		frm_obj.st_name.focus();
		return false;
	 }
	 if(frm_obj.st_surname.value=="")
	 {
		alert("please enter your surname")
		frm_obj.st_surname.focus();
		return false;
	 }
	  if(frm_obj.st_father.value=="")
	 {
		alert("please enter your father name")
		frm_obj.st_father.focus();
		return false;
	 }
	 if(frm_obj.st_mother.value=="")
	 {
		alert("please enter your mother name")
		frm_obj.st_mother.focus();
		return false;
	 }
	  if(frm_obj.st_add.value=="")
	 {
		alert("please enter your address")
		frm_obj.st_add.focus();
		return false;
	 }
	  if(frm_obj.st_roll.value=="")
	 {
		alert("please enter your roll no")
		frm_obj.st_roll.focus();
		return false;
	 }
	  if(frm_obj.st_city.value==0)
	 {
		alert("please select city")
		frm_obj.st_city.focus();
		return false;
	 }
	  if(frm_obj.st_state.value==0)
	 {
		alert("please select state")
		frm_obj.st_state.focus();
		return false;
	 }
	 
	  if(frm_obj.st_gender[0].checked==false && frm_obj.st_gender[1].checked==false)
	 {
		alert("please enter your gender")
		frm_obj.st_gender[0].focus();
		return false;
	 }
	 if(frm_obj.st_dob.value=="")
	 {
		alert("please enter your date of birth")
		frm_obj.st_dob.focus();
		return false;
	 }
	 if(frm_obj.st_caste.value=="")
	 {
		alert("please enter your caste")
		frm_obj.st_caste.focus();
		return false;
	 }
	 if(frm_obj.st_blood.value==0)
	 {
		alert("please enter your blood group")
		frm_obj.st_blood.focus();
		return false;
	 }
	 if(frm_obj.st_std.value==0)
	 {
		alert("please enter your standard")
		frm_obj.st_std.focus();
		return false;
	 }
	 if(frm_obj.st_div.value==0)
	 {
		alert("please enter your divison")
		frm_obj.st_div.focus();
		return false;
	 }
	 if(frm_obj.st_mobile.value=="")
	 {
		alert("please enter your mobile no")
		frm_obj.st_mobile.focus();
		return false;
	 }
	 if(frm_obj.st_email.value=="")
	 {
		alert("please enter your email address")
		frm_obj.st_email.focus();
		return false;
	 }
	  return true;
}
	 /*
	if(frm_obj.st_photo.value=="")
	 {
		alert("please upload your image")
		frm_obj.st_photo.focus();
		return false;
	 }
	 
	
	 
	 var cck=false
	 var element_length=frm_obj.elements.length;
	 for(i=0;i<element_length;i++)
	 {
		 if(frm_obj.elements[i].name=="st_qul[]")
		 {
			 if(frm_obj.elements[i].checked==true)
			 {
				 cck=true;
				 break;
			 }
		 }
	 }
	 if(cck==false)
	 {
		 alert("please select your qualification")
		 return false;
	 }
	  if(frm_obj.st_course.value==0)
	  {
		alert("please select course")
		frm_obj.st_course.focus();
		return false;
	  } */
	  
	  
 
 	   
 ///////FUNCTION FOR DELETE STUDENT //////// 


function delete_student(st_id)
{
	if(confirm("do you want to delete student?"))
	{
		this.document.student_view.st_id.value=st_id;
		this.document.student_view.act.value="delete_student";
		this.document.student_view.submit();
	}
}

///////FUNCTION FOR DELETE multiple STUDENT //////// 

function delete_multiple_student()
{
	if(confirm("do you want to delete selected student?"))
	{
		this.student_view.act.value="delete_multiple_student";
		this.student_view.submit();
	}
}

function check_all(obj)
{
	var frm_obj = this.document.student_view;
	var length=frm_obj.elements.length;
	for(i=0;i<length;i++)
	{
		if(frm_obj.elements[i].type=="checkbox")
		{
			frm_obj.elements[i].checked=obj.checked;
		}
	}
}
 