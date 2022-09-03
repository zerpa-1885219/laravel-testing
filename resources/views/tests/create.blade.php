<form action="{{ route('tests.store') }}" method="POST"> 	
    @csrf 	
    <strong>Name:</strong><input type="text" name="name"> 	
    <input name="done" type="checkbox" id="done"> 	
    <label for="done">Done</label> 	
    <button type="submit">Submit</button> 
    </form>