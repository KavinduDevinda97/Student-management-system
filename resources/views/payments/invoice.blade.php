
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Generate PDF Example - ItSolutionStuff.com</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
 
    <center>

        <h1 class="mt-3  ">
            Invoice
        </h1>
        <i class="bi bi-bank2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
            <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916zM12.375 6v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2M.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1z"/>
          </svg></i>  
          <hr>
        
     <h2>Name : {{$payments->enrollment_id}}</h2> <br>
        <h2>Enrollment : {{$payments->paid_date}}</h2> <br>
       <h2>Amount : {{$payments->amount}}</h2> 

        </center>
  
  
</body>
</html>