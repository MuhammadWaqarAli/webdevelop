<?php 
session_start();
// print_r($_SESSION);
// die(); 
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
 	  
   <?php require_once 'header.php'; ?>
   
    

          
          

 	

 		
 	</div>
  <?php require_once 'footer.php'; ?>
  </body>

 </html>
 <script type="text/javascript">
    $(document).ready(function(){
        $(document).click(function(){
         var value = $('.test').val()
        console.log(value)
     
        })
       
       
    })

 	var a=10;
 	var a=b=c=10;
 	var a=10;
 	var b=10;
 	var c=10;
 	var data ={'id' :10,'name':'wicky'}
 	var result;
 	var a=54,b=89,c=146;
 	result=a+b+c;
 	console.log(result)
 	divide=a/b/c;
 	console.log(divide)
 	multiply=a*b*c;
 	console.log(multiply)
 	
 	var marks=56;
 	if(marks>33){
 		console.log("pass");
     }
     else
     	console.log("failed");
     
    
     console.log( 'Banking System');
     console.log( ' press 1 for inquiry');
     console.log( '  press 2 for Withdrow');
     console.log( ' press 3 for Transfore');
     console.log( ' press 4 for Exit');
      
      var optione = 1;
       switch(optione){
       	case 1 : 
       		console.log('Welcome to Inquiry');
       		break;
       	case 2 :
       	    console.log('Welcome to Withdrow')
       	    break;
       	case 3 :
       	     console.log('Welcome to Transfore')
       	     break;
       	case 4 :
       	     console.log('Exit')
       	     break;
        default:
       		console.log('Invalid Option');
       		break;
}
    
    var i=10
    while (i>=1){
    i--
    }
    function add ( a=10,b=20){
    	
    	var add = a+b;
    	console.log(add);
    	}
    	// add();
    	function sub (a,b ){
    		
    		var sub =a-b;
    		console.log( sub);
    	}
    // 	sub ();
    function multiply (a,b ){
    		
    		var multiply =a*b;
    		console.log( multiply);
    	}
    	function divide (a,b ){
    		
    		var divide =a/b;
    		console.log( divide);
    	}
     var a=10
    var b=5
    var option ='add'
    switch (option){
    	case 'add':
    add(100,200);
    break;
    case 'sub':
    sub(80,70);
    break;
    case 'multiply':
    multiply(10,10);
    break;
    case 'divide':
    divide(10,10);
    break;
    console.log('invaled Input')
    } 
    var fruits = ['apple','chery','banana','mango','graphs','apple','chery','banana','mango','graphs','apple','chery','banana','mango','graphs','apple','chery','banana','mango','graphs','apple','chery','banana','mango','graphs','apple','chery','banana','mango','graphs','apple','chery','banana','mango','graphs','apple','chery','banana','mango','graphs'];
    console.log(fruits,[2])
    var loa = fruits.length ;
    
      for (var i = 0; i < loa; i++) {
         console.log(fruits[i])
      }



    </script>        



