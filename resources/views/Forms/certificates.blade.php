@extends('Layouts/front-end-layout')

@section('Content')

    <div class="content" style="margin-top: 80px; padding-top: 20px;">
        
        <div class="container" style="margin-top: 80px; padding-top: 20px;">


            
                    <!-- Smart Wizard -->

                    <h1 style="text-align: center; padding-bottom: 15px ">Certificates Requast</h1>
                    <div >

                      
                        <form class=" form-label-left">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="first-name" required="required" class="form-control" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="last-name" name="last-name" required="required" class="form-control" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nic" class="col-form-label col-md-3 col-sm-3 label-align">NIC</label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="middle-name" class="form-control" type="text" name="nic" disabled="disabled" inputmode="none">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Email<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="birthday" class="form-control" required="required" type="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Phone Number<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="birthday" class="form-control" required="required" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Address ( 100 max)<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea id="Address" required="required" class="form-control" name="Address" data-parsley-trigger="keyup" data-parsley-maxlength="100"  ></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Certificate Type<span >*</span></label>
                                <div class="col-md-9 col-sm-9 ">
                                    <select class="form-control">
                                        <option>Choose option</option>
                                        <option>Birth Certificates</option>
                                        <option>Marriag Certificates</option>
                                        <option>Death Certificates </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="radio iradio_flat-green" >
                                        <label>
                                            <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Deliver the Certificate
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Collect from Devitional Secretariat
                                        </label>
                                    </div>
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