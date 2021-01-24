$(document).ready(function(){
		$("#submit-frm").click(function(){
			if($("#email_add").val() === '')
			{
				$("#email_add").css("border","1px solid red");
				return false;
			}
			else if($("#add_password").val() === '')
			{
				$("#add_password").css("border","1px solid red");
				return false;
			}
			
			else
			{
				$("#loginForm").submit();
			}
		});

			$("#email_add").blur(function(){
				if($("#email_add").val() != '')
				{
					$("#email_add").css("border","1px solid #eeeeee");
				}
			});

			$("#add_password").blur(function(){
				if($("#add_password").val() != '')
				{
					$("#add_password").css("border","1px solid #eeeeee");
				}
			});
		});
