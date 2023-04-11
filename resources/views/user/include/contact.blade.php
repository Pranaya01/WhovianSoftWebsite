<section id="contact_us" class="toppadding-40 bottompadding-20">
        <div class="container-fluid whitebg toppadding-20">
            <div class=" aboutuscard mt-5">
                <div class="container card toppadding-20 rightpadding-20 leftpadding-20" style="width:100%;">
                    <div class="card-header text-center bottompadding-20 whitebg">
                    <h2 class="font-weight-bold themered">Contact Us</span></h2>
                    <h3 class="blacktext">What makes you go for Whoviansoft as your ultimate, pertinent and Reliable partner?</h3>
                    </div>
                    <div class="card-body toppadding-20">

                    <form method="POST" action="" enctype="multipart/form-data">
                    <form action="{{route('contact.store')}}" method="POST">

                    {{ csrf_field() }}
                            <div class="formrow row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                @if(session('status'))
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-8 col-md-8">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Success ! </strong>  &nbsp; {{ session('status') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="container">
                                <!-- <h2 class="text-center" style="color:black; text:bold">News Details</h2> -->
                                @if($message = Session::get('Success'))
                                <div class="alert alert-success">
                                    <p align="center">{{$message}}</p>
                                </div>
                                @endif

                                @if($message = Session::get('error'))
                                <div class="alert alert-danger">
                                    <p align="center">{{$message}}</p>
                                </div>
                                @endif
                                </div>
                            </div>

                            <div class="form-group row formrow">
                            <label for="name" class="col-sm-3 list left-align"><b>Name: </b></label>
                                <div class="col-sm-9">
                                    <input type="name" name="name" class="form-control form-control-sm list left-align" id="name" placeholder="Name" required>
                                </div>
                            </div>

                            <div class="form-group row formrow">
                                <label for="phone" class="col-sm-3 col-form-label list left-align"><b>Phone Number: </b></label>
                                <div class="col-sm-9">
                                    <input type="tel" name="phonenumber" class="form-control form-control-sm list left-align" id="phonenumber" placeholder="Phone number" required>
                                </div>
                            </div>

                            <div class="form-group row formrow">
                                <label for="email" class="col-sm-3 col-form-label list left-align"><b>Email Id: </b></label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control form-control-sm list left-align" id="email" placeholder="Email Id" required>
                                </div>
                            </div>

                        
                            <div class="form-group row formrow">
                                <label for="service" class="col-sm-3 col-form-label list left-align"><b>Requested Service: </b></label>
                                <div class="col-sm-9">
                                    <Select name="requirement" id="requirement" class="form-control form-control-sm list left-align" required>
                                        <option disabled selected value> -- select an option -- </option>
                                        <option value="Amazon Service">Amazon Service</option>
                                        <option value="Ebay Service">Ebay Service</option>
                                        <option value="Walmart Service">Walmart Service</option>
                                        <option value="Shopify Service">Shopify Service</option>
                                        <option value="BigCommerce Service">BigCommerce Service</option>
                                        <option value="WooCommerce Service">WooCommerce Service</option>
                                        <option value="WooCommerce Service">E-commerce Catalogmanagement Service</option>
                                        <option value="WooCommerce Service">Web development</option>
                                        <option value="WooCommerce Service">IT Staffing</option>
                                        <option value="WooCommerce Service">Others</option>
                                    </Select>
                                </div>
                            </div>

                            <div class="form-group row formrow">
                                <label for="message" class="col-sm-3 col-form-label list left-align"><b>Message: </b></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control form-control-sm list left-align" name="message" id="comment" cols="25" placeholder="Please type your message here..." rows="10" required></textarea>
                                    <div class="formrow" default-buttons mt-5>
                                        <button class="btn btn-primary" type="submit" name="btn-send" class="whitetext">Submit</button>
                                    </div>
                                    
                                </div>
                                 
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 