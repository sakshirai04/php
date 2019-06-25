<html>
<head>
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>  
    <body>
            <form  >
                <div class="form-row">
                    <div>
                        <input type="text" class="form-control" placeholder="first name">
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="last name">
                        
                    </div>
                    
                </div>
                <div class="form-group col-md-2">
                    <label > name</label>
                    <input class="form-control " >
                </div>
                <div class="form-group col-md-2 " >
                    <label>password</label>
                    <input class="form-control" >
                </div>
                <div>
                    <label>email</label>
                    <input type="email" class="form-control">

                </div>
                <div class="form-group">
                    <label>select</label>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label>multiple select</label>
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>

                    </select>
                    
                    
                </div>
                <div class="form-group">
                    <label>textarea</label>
                    <textarea class="form-control">
                        
                    </textarea>
                </div>
                <div class="form-group">
                    <label>fileinput</label>
                    <input type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label>select large</label>
                    <input class="form-control form-control-lg">

                </div>

                <div>
                    <button class="btn btn-primary">submit</button>
                </div>
            </form>
    
  </body>
</html>