<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
    </head>
    <body>
        <div class="container">
          <h2 class="text-center">Input Stock</h2>
          <div class="col-md-6 offset-3">
            <form action="{{url('stock/add')}}" method="post">
              @csrf
              <div class="form-group">
                 <label for="stockName">Stock Name:</label>
                 <input type="text" class="form-control" id="stockName" name="stockName">
               </div>
               <div class="form-group">
                 <label for="stockPrice">Stock Price:</label>
                 <input type="text" class="form-control" id="stockPrice" name="stockPrice">
               </div>
              <div class="form-group">
                <label for="stockPrice">Select Year:</label>
                <select class="selectPicker" id="stockPrice" name="stockYear">
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                </select>
              </div>
              <a href="{{url('stocks')}}" class="btn btn-secondary float-right">Back to Chart</a>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
    </body>
</html>