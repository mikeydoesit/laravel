@extends('layouts.main-app')


@section('content')
  <div id="offers-page">
  
    <div class="content-box">
        <div class="row">
            <div class="col-md-8 offset-md-2">
              <h1>Signup for exclusive deals!</h1>
              <form>
              <div class="row">
              <div class="col-md-6">
              <div class="mb-3">
                  <label for="fName" class="form-label">First Name</label>
                  <input placeholder="John"  name="fName" type="text" class="form-control" id="fName">
                </div>
              </div>
              <div class="col-md-6">
               <div class="mb-3">
                  <label for="lName" class="form-label">Last Name</label>
                  <input placeholder="Doe"  name="lName" type="text" class="form-control" id="lName">
                </div>
              </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input placeholder="example@example.com"  name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone number</label>
                    <input placeholder="+123-456-7890" name="phone" type="phone" class="form-control" id="phone" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                      <p>*In signing up I acknowledge that I am over 18 years of age, want to receive email offers from Billy Burgers and if I opt to join Dine Rewards, agree to the terms and conditions of the program.</p>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                  </div>
                </div>
              </div>
                
              </form>
            </div>
        </div>
    </div>
  </div>
@stop