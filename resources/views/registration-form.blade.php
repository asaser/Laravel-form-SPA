<!doctype html>
<html lang="en">
  <head>
    <title> Laravel 8 Form Validation - Programming Fields</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- my styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  </head>
  <body>

  <header id="mainHeader">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <h1 class="text-uppercase mt-3 mx-4"> <small>gift voucher</small></h1>
                </div>
            </div>
        </div>


        <div class="header_styling">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6 mx-1">
                        <img src="./img/header_img_1.jpg" class="img-fluid header_picture mx-5" alt="Responsive Img 1">
                        <img src="./img/header_img_2.jpg" class="img-fluid mx-2" alt="Responsive Img 2">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12 mt-3">
                        <p class="mt-3 mx-4">
                            This is a voucher that can be used for almost
                            anything on our store - except Gift Vouchers or Subscriptions plans.
                        </p>
                </div>
            </div>
        </div>
    </header>

    <main>
    <form action="newPage" method="POST">
    <!-- <form method="post" action="{{ url('create') }}"> -->
    @csrf
            <section id="fromSections">
                    <div class="container-fluid ">
                        <div class="form-row">
                            <div class="col-md-6 mt-3">
                                <div class="form-group mt-3 mx-4">
                                    <label for="name">From <span class="text-danger"> * </span>:</label>
                                    <input type="text" name="name" class="form-control" maxlength="50" placeholder="YOUR NAME HERE" value="{{old('name')}}" required/>
                                    <!-- {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!} -->
                                </div>

                                <div class="form-group mt-5 mx-4">
                                    <label for="email">Your email address <span class="text-danger"> * </span>:</label>
                                    <input type="email" name="email" class="form-control main_style" maxlength="100"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="YOUR EMAIL ADDRESS HERE" value="{{old('email')}}" required/>
                                    <!-- {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!} -->
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group mt-3 mx-4">
                                    <label for="validForm">Voucher Amount <span class="text-danger"> * </span>:</label>
                                    <select type="text" name="validForm" class="form-control" value="{{old('validForm')}}" required>
                                        <option value="&pound10">&pound10</option>
                                        <option value="&pound20">&pound20</option>
                                        <option value="&pound30">&pound30</option>
                                        <option value="&pound40">&pound40</option>
                                        <option value="&pound50">&pound50</option>
                                        <option value="&pound60">&pound60</option>
                                        <option value="&pound70">&pound70</option>
                                        <option value="&pound80">&pound80</option>
                                        <option value="&pound90">&pound90</option>
                                        <option value="&pound100" disabled>&pound100 sorry, this voucher is currently unavailable</option>
                                    </select>
                                    <!-- {!!$errors->first("validForm", "<span class='text-danger'>:message</span>")!!} -->
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="toSections">
                    <div class="container-fluid">
                        <div class="form-row">
                            <div class="col-lg-6  mt-3">
                                <div class="form-group mt-3 mx-4">
                                    <label for="nameRecipient">To <span class="text-danger"> * </span>:</label>
                                    <input type="text" name="nameRecipient" class="form-control" maxlength="100" placeholder="RECIPIENT'S NAME HERE" value="{{old('nameRecipient')}}" required/>
                                    <!-- {!!$errors->first("nameRecipient", "<span class='text-danger'>:message</span>")!!} -->
                                </div>
                                <div class="form-group mt-5 mx-4">
                                    <label for="emailRecipient">Recipient's email address <span class="text-danger"> * </span>:</label>
                                    <input type="email" name="emailRecipient" class="form-control" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="RECIPIENT'S EMAIL ADDRESS HERE" value="{{old('emailRecipient')}}" required/>
                                    <!-- {!!$errors->first("emailRecipient", "<span class='text-danger'>:message</span>")!!} -->
                                </div>
                            </div>

                            <div class="col-lg-6  mt-3">
                                <div class="form-group mt-3 mx-4">
                                    <label for="message">Message:</label>
                                    <textarea type="text" name="message" class="form-control" rows="6" value="{{old('message')}}"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="footerFinalization">
                    <div class="container-fluid">
                        <div class="row mb-5">
                            <div class="col-lg-6 font-weight-bold mt-3 d-flex justify-content-start">
                                <p class="mt-3 mx-4">
                                    <u>
                                        FAQs about our Gift Vouchers
                                    </u>
                                </p>
                            </div>

                            <div class="col-lg-6 mt-3 d-flex justify-content-end">
                                <button type="submit" class="btn btn-dark text-uppercase mt-3 mx-4">buy gift voucher</button>
                            </div>
                        </div>
                    </div>
            </section>

        </form>
    </main>

    <footer>

    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
