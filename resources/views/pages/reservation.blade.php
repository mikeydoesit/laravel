@extends('layouts.app')


@section('content')
  <div id="waitlist-page">
  
    <div class="content-box">
        <div class="row">
            <div class="col-md-6">
              <h1>Get on the list</h1>
              <form>
                <div class="mb-3">
                  <label for="fullNameInput" class="form-label">Full Name</label>
                  <input placeholder="Jacob Mensah" name="fullNameInput" type="text" class="form-control" id="phone" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input placeholder="example@example.com"  name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone number</label>
                  <input placeholder="+123-456-7890" name="phone" type="phone" class="form-control" id="phone" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
                </div>
                <div class="mb-3">
                <label for="nOfGuests" class="form-label">How many guests</label>
                  <select name="nOfGuests" class="form-select" aria-label="Default select example">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
                <div class="mb-3">
                <label for="time" class="form-label">What time?</label>
                  <select name="time" class="form-select" aria-label="Default select example">
                    <option value="6">6:00 PM</option>
                    <option value="7">7:00 PM</option>
                    <option value="8">8:00 PM</option>
                    <option value="9">9:00 PM</option>
                    <option value="10">10:00 PM</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Confirm</button>
              </form>
            </div>
            <div class="col-md-6">
              <p>Please note: This is not a reservation.  You will be added to the current waitlist.  You may have a short wit when you arrive whilst we prepare your table.</p>
            </div>
        </div>
    </div>
  </div>
@stop