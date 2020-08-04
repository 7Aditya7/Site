@extends('layouts.app')
@section('title', 'form_register')
@section('content')
<style>
  input[type=number]{
    width:6rem;
  } 
  table{
    color:blue;
  }
  table ,th,tr{
    text-align:center;
  }
</style>
<div class="container">
     <div class="text-center">
        <h1>TreasurerController@store Form</h1>
     </div>
     <a href="/" class="btn btn-default">Go Back</a>
     <hr>
    <form action="#">
    
       <div class="form-group">
         <label for="Clubs">Choose a Club Name:</label> <br>
         <select name="clubs" id="clubs"  class = "form-control" style="width:30rem">
            <option value="">  </option>
            <option value="Bagmati Leo Club"> Bagmati Leo Club </option>
            <option value="Banepa Leo Club"> Banepa Leo Club </option>
            <option value="Bhaktapur Araniko Leo Club"> Bhaktapur Araniko Leo Club </option>
            <option value="Bhaktapur Dibyaswori Leo Club"> Bhaktapur Dibyaswori Leo Club </option>
            <option value="Bhaktapur Golden Gate Leo Club"> Bhaktapur Golden Gate Leo Club </option>
            <option value="Bhaktapur Heart &amp; Diabetes Center Leo Club"> Bhaktapur Heart &amp; Diabetes Center Leo Club </option>
            <option value="Bhaktapur Kedareshwor Leo Club"> Bhaktapur Kedareshwor Leo Club </option>
            <option value="Bhaktapur Rose Village Leo Club"> Bhaktapur Rose Village Leo Club </option>
            <option value="Bhaktapur Suryabinyak Leo Club"> Bhaktapur Suryabinyak Leo Club </option>
            <option value="Dhanusha Janakpur Leo Club"> Dhanusha Janakpur Leo Club </option>
            <option value="Hariwon Leo Club"> Hariwon Leo Club </option>
            <option value="Janakpur Monastic Leo Club"> Janakpur Monastic Leo Club </option>
            <option value="Kabhre Banepa Leo Club"> Kabhre Banepa Leo Club </option>
            <option value="Kabhre Sankhu Leo Club"> Kabhre Sankhu Leo Club </option>
            <option value="Kahmandu Eureka Leo Club"> Kahmandu Eureka Leo Club </option>
            <option value="Kathamandu Capital Leo Club"> Kathamandu Capital Leo Club </option>
            <option value="Kathmadnu Synergy Leo Club"> Kathmadnu Synergy Leo Club </option>
            <option value="Kathmandu Alka Leo Club"> Kathmandu Alka Leo Club </option>
            <option value="Kathmandu Central Leo Club"> Kathmandu Central Leo Club </option>
            <option value="Kathmandu Chabahil City Leo Club"> Kathmandu Chabahil City Leo Club </option>
            <option value="Kathmandu Chabahil Leo Club"> Kathmandu Chabahil Leo Club </option>
            <option value="Kathmandu Creation Leo Club"> Kathmandu Creation Leo Club </option>
            <option value="Kathmandu Diamond Leo Club"> Kathmandu Diamond Leo Club </option>
            <option value="Kathmandu Doab Leo Club"> Kathmandu Doab Leo Club </option>
            <option value="Kathmandu Downtown Leo Club"> Kathmandu Downtown Leo Club </option>
            <option value="Kathmandu Futurestar Leo Club"> Kathmandu Futurestar Leo Club </option>
            <option value="Kathmandu High Vision Leo Club"> Kathmandu High Vision Leo Club </option>
            <option value="Kathmandu Himchuli Leo Club"> Kathmandu Himchuli Leo Club </option>
            <option value="Kathmandu Horizon Leo Club"> Kathmandu Horizon Leo Club </option>
            <option value="Kathmandu Imperial Leo Club"> Kathmandu Imperial Leo Club </option>
            <option value="Kathmandu Kageshwori Leo Club"> Kathmandu Kageshwori Leo Club </option>
            <option value="Kathmandu Kailash Leo Club"> Kathmandu Kailash Leo Club </option>
            <option value="Kathmandu Kritipur Leo Club"> Kathmandu Kritipur Leo Club </option>
            <option value="Kathmandu Natural Leo Cub"> Kathmandu Natural Leo Cub </option>
            <option value="Kathmandu Peace Leo Club"> Kathmandu Peace Leo Club </option>
            <option value="Kathmandu Pioneer Leo Club"> Kathmandu Pioneer Leo Club </option>
            <option value="Kathmandu Ramechap Leo Club"> Kathmandu Ramechap Leo Club </option>
            <option value="Kathmandu Rays Leo Club"> Kathmandu Rays Leo Club </option>
            <option value="kathmandu Regency Leo Club"> kathmandu Regency Leo Club </option>
            <option value="Kathmandu Roshni leo club"> Kathmandu Roshni leo club </option>
            <option value="Kathmandu Samriddhi Leo Club"> Kathmandu Samriddhi Leo Club </option>
            <option value="Kathmandu samriddhi Mega chapter Leo Club"> Kathmandu samriddhi Mega chapter Leo Club </option>
            <option value="Kathmandu Sunrise Arundayo academy Leo Club"> Kathmandu Sunrise Arundayo academy Leo Club </option>
            <option value="Kathmandu Unique Leo Club"> Kathmandu Unique Leo Club </option>
            <option value="Kathmandu Vision Leo Club"> Kathmandu Vision Leo Club </option>
            <option value="Lahan City Leo Club"> Lahan City Leo Club </option>
            <option value="Lalbandi City Leo Club"> Lalbandi City Leo Club </option>
            <option value="Mount 8848 Leo Club ** Kohinoor"> Mount 8848 Leo Club ** Kohinoor </option>
            <option value="Nepal Eco Friendly Leo Club"> Nepal Eco Friendly Leo Club </option>
            <option value="Nepal Excellence Leo Club"> Nepal Excellence Leo Club </option>
            <option value="Okhaldhunga Leo Club"> Okhaldhunga Leo Club </option>
            <option value="Panauti Leo Club"> Panauti Leo Club </option>
            <option value="Sindhuli City Leo Club"> Sindhuli City Leo Club </option>
          </select>
        </div>
        <div class="form-group">
         <label for="months">Month of Report:</label> <br>
         <select name="months" id="months"  class = "form-control" style="width:30rem">
            <option value="">  </option>
            <option value="January"> January </option>
            <option value="February "> February </option>
            <option value="March "> March </option>
            <option value="April "> April </option>
            <option value="May "> May </option>
            <option value="June "> June </option>
            <option value="July "> July </option>
            <option value="August "> August </option>
            <option value="September"> September </option>
            <option value="October "> October </option>
            <option value="November "> November </option>
            <option value="December"> December </option>
          </select>     
        </div> 
        <div class="form-group" >
           <label for="administrative"> Administrative Account :</label> <br>
          <table class="table table-bordered" style="color:white;";  >
            <tr class="form-group" >
              <th>No.</th>
              <th>Expenses/Expenditure	</th>
              <th>Amount</th>
              <th>..........Income............</th>
              <th>Amount(Rs.)</th>
            </tr>
            <tr >
              <td>1</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr >
              <td>2</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>3</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>4</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>5</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>6</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>7</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>8</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>8</td>
              <td><input type="text" name="" ></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>10</td>
              <td><input type="text" name="" ></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>

          </table>

        </div>
        <div class="form-group" >
           <label for="service"> Service Account :</label> <br>
          <table class="table table-bordered" style="color:white;";  >
            <tr class="form-group" >
              <th>No.</th>
              <th>Expenses/Expenditure	</th>
              <th>Amount</th>
              <th>..........Income............</th>
              <th>Amount(Rs.)</th>
            </tr>
            <tr >
              <td>1</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr >
              <td>2</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>3</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>4</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>5</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>6</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>7</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>8</td>
              <td><input type="text" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>8</td>
              <td><input type="text" name="" ></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>
            <tr>
              <td>10</td>
              <td><input type="text" name="" ></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>
              <td><input type="number" name=""></td>          
            </tr>

          </table>

        </div>
        <div class="form-group">
         <label for="total_fund">Total Fund Raised From Fundraiser Programmes.</label>
         <input type="number" name="total_fund" class = "form-control col-md-5" value="RS 2000.">
        </div>
        <div class="form-group">
         <label for="total_fund">Total Cash In Hand</label>
         <input type="number" name="total_fund" class = "form-control col-md-5" value="RS 2000.">
        </div>
        <div class="form-group">
          <label for="treasurer_name">Treasurer Name</label><br>
          <select name="prefix"> <option value="preifx"> Leo </option> </select> &nbsp&nbsp&nbsp<input type="text" name="first_name">&nbsp&nbsp&nbsp<input type="text" name="first_name"> <br>
          <label for="prefix">Prefix</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="first_name">First Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="last_name">last Name</label><br>
        </div>
        <div class="form-group">
         <label for="contact_number">Contact Number</label>
         <input type="number" name="contact_number" class = "form-control col-md-5">
        </div>

    </form>
</div>   
@endsection

