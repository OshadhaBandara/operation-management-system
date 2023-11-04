@extends('Layouts/front-end-layout')

@section('Content')

    <div class="content" style="margin-top: 80px; padding-top: 20px;">
        
        <div class="container" style="margin-top: 80px; padding-top: 20px;">


            
                    <!-- Smart Wizard -->

                    <h1 style="text-align: center; padding-bottom: 15px ">Certificates Requast</h1>
                    <div >

                      
                        <form class=" form-label-left" action="" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="first-name" name="First_Name" required="required" class="form-control" disabled="disabled">
                                </div>
                                <div class="text-danger">
                                    <span>@error('First_Name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="last-name" name="Last_Name" required="required" class="form-control" disabled="disabled">
                                </div>
                                <div class="text-danger">
                                    <span>@error('Last_Name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nic" class="col-form-label col-md-3 col-sm-3 label-align">NIC<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="middle-name" class="form-control" type="text" name="NIC" disabled="disabled" inputmode="none">
                                </div>
                                <div class="text-danger">
                                    <span>@error('NIC') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Email<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="birthday" class="form-control" name="Email" required="required" type="email">
                                </div>
                                <div class="text-danger">
                                    <span>@error('Email') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Phone Number<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="birthday" class="form-control" name="Phone" required="required" type="text">
                                </div>
                                <div class="text-danger">
                                    <span>@error('Phone') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nic" class="col-form-label col-md-3 col-sm-3 label-align">District<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="middle-name" class="form-control" type="text" name="District" disabled="disabled" inputmode="none">
                                </div>
                                <div class="text-danger">
                                    <span>@error('District') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nic" class="col-form-label col-md-3 col-sm-3 label-align">Division<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="middle-name" class="form-control" type="text" name="Division" disabled="disabled" inputmode="none">
                                </div>
                                <div class="text-danger">
                                    <span>@error('Division') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Address<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea disabled id="Address" required="required" class="form-control" name="Address" data-parsley-trigger="keyup" data-parsley-maxlength="100"  ></textarea>
                                </div>
                                <div class="text-danger">
                                    <span>@error('Address') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Certificate Type<span >*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" name="Certificate">
                                        <option disabled>Choose option</option>
                                        <option>Birth Certificates</option>
                                        <option>Marriag Certificates</option>
                                        <option>Grama Niladari Certificates</option>
                                    </select>
                                </div>
                                <div class="text-danger">
                                    <span>@error('Certificate') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="radio iradio_flat-green" >
                                        <label>
                                            <input type="radio" checked="" value="option1" id="optionsRadios1" name="Collection"> Deliver the Certificate
                                        </label>
                                        
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="option2" id="optionsRadios2" name="Collection"> Collect from Devitional Secretariat
                                        </label>
                                    </div>
                                </div>
                                <div class="text-danger">
                                    <span>@error('Collection') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            
                        
                            <div class="form-group row">
                                <div class="col-md-3 col-sm-3"></div> 
                                <div class="col-md-6 col-sm-6">
                                    <button type="reset" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- End SmartWizard Content -->




        </div>

        



        
    </div>

@endsection