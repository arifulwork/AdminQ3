<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/editClassName.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
    
<body>
    
    
    <div class="d-flex flex-column justify-content-center w-100 h-100">
	<div class="d-flex flex-column justify-content-center align-items-center">
        @if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
		<div class="bigContainer">
<form action="/updatesubject/{{ $editsubject['subject_id'] }}" class="form-container" method="POST">
    @csrf
  @method('put')
     <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label form-label">Class Title:</label>
    <div class="col-sm-9">
      <input type="text" name="title" class="form-control-plaintext form-label" id="staticEmail" style="border:1px solid white; color:white;" value="{{ $editsubject-> title }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label form-label">Start Date:</label>
    <div class="col-sm-9">
        <input type="date" name="date" value="{{ $editsubject-> date }}" id="edit-class-date" class="form-control-plaintext form-label" style="border:1px solid white; color:white;" required>
    </div>
  </div>
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label form-label">Total of Seat:</label>
    <div class="col-sm-9">
      <input type="label" name="seats" readonly class="form-control-plaintext form-label" id="staticEmail" style="border:1px solid white;color:white;" value="{{ $editsubject-> seats }}">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label form-label">Start Time:</label>
    <div class="col-sm-9">
<!--      <input type="date" id="date" name="date" class="form-control-plaintext form-label" style="border:1px solid white"/>-->
        <input type="time" value="{{ $editsubject-> starttime }}" id="edit-class-start-time" name="starttime" class="form-control-plaintext form-label" style="border:1px solid white;color:white;" required>
    </div>
  </div>
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label form-label">End Time: </label>
    <div class="col-sm-9">
        <input type="time" value="{{ $editsubject-> endtime }}" id="edit-class-start-time" name="endtime" class="form-control-plaintext form-label" style="border:1px solid white; color:white;" required>
    </div>
  </div>
    
    <div class="btn-container">
    <a href="/admindashboard" class="cancel-Btn" style="text-decoration: none; text-align: center;">Cancel</a>
    <button type="submit" class="edit-Btn">Update</button>
    </div>
</form>
    </div>
	</div>
</div>
</body>
</html> 
