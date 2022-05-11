<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/assets/teacherClass2.css') }}">
    <script src="{{ asset('/assets/deleteClass.js') }}"></script>
</head>
<body>
  <div class="context">
      <div class="big-back-class-container">
           <div class="back-class-container">
           <a href="/classschedule"><i class="fa-solid fa-circle-arrow-left"></i></a>
               <h1>Class Schedule</h1></div></div>
      <div class="search-add-classContainer">
               <div class="search-add-classContainer2">
               <form>
                   <input type="text" name="search" placeholder="Search..">
                         <select name="classDetail" id="classDetail">
                            <option value="className">Class Name</option>
                            <option value="date">Date</option>
                            <option value="time">Time</option>
                         </select>
                        <input type="submit" name="searchBtn" id="searchBtn" value="Search">
                   
                </form>
                   </div>
               </div>
           <div class="bigContainer">
               
    <div class="sub-container">
        
    <div class="sub-container1">
        @foreach ($data as $i )
        
        <button class="button1">
            
            <div class="className-dropdownIcon-container">

                
                    
                
                
                <div class="className">{{ $i -> title }}</div>
                <div class="dropdownIcon">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <div class="dropdown-content">
                        <a href="editClass.html">Update Class Detail</a>
                        <div class="delete" onclick="deleteClass()">Remove Class</div>
                        <a href="">Export Class Information</a>
                    </div>
                </div>
            </div>
            

            <div class="big-date-time-container">
                <div class="date-time-container">
                    <div class="class-date">{{ $i -> date }}</div>
                    <div class="class-time">{{ $i -> starttime }} - {{ $i -> endtime }}</div>
                </div>
                <div class="seat">{{ $i -> seats }}</div>
                @endforeach
            </div>
            
        </button>

        
       
    </div>
    </div>
    </div>
    </div>

   

<div class="area" >
        <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
        </ul>
</div>
</body>
</html> 
