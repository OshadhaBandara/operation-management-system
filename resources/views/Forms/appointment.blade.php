@extends('Layouts/front-end-layout')

@section('Content')



    <div class="content" style="margin-top: 80px; padding-top: 20px;">
        
        <div class="container" style="margin-top: 80px; padding-top: 20px;">
            
                    <!-- Smart Wizard -->

                    <h1 style="text-align: center; padding-bottom: 15px "> Appointment Scheduler </h1>
                    <div >

                      
                        <form class=" form-label-left">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="first-name" required="required" class="form-control" disabled >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="last-name" name="last-name" required="required" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nic" class="col-form-label col-md-3 col-sm-3 label-align">NIC</label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="middle-name" class="form-control" type="text" name="nic"  inputmode="none" disabled>
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align">District<span >*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control">
                                        <option>Choose option</option>
                                        <option>District1</option>
                                        <option>District2</option>
                                        
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Divitions<span >*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control">
                                        <option>Choose option</option>
                                        <option>Divitions1</option>
                                        <option>Divitions2</option>
                                        
                                    </select>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Service Type<span >*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control">
                                        <option>Choose option</option>
                                        <option>inquirys</option>
                                        <option>Appointment with Grama Niladari</option>
                                        <option>Appointment with Samurdi Niladari</option>
                                        <option>Appointment with Sanwardana Niladari</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Appontment Date </label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="NIC" class="form-control" required="required" type="Date">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Appointment Time</label>
                                <div class="col-md-6 col-sm-6">
                                    <select id="appointment-time" class="form-control" required>
                                        @for ($hour = 8; $hour < 17; $hour++)
                                            @for ($minute = 0; $minute < 60; $minute += 15)
                                                @php
                                                    $time = sprintf("%02d:%02d", $hour, $minute);
                                                @endphp
                                                <option value="{{ $time }}">{{ $time }}</option>
                                            @endfor
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Description <span >*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group"> 
                                        <textarea class="resizable_textarea form-control" placeholder="Please add the description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Attachment<span >*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="grama-niladari-certificate" name="grama_niladari_certificate" accept=".pdf, .png, .jpg, .jpeg" required="required">
                                        <label class="custom-file-label" for="grama-niladari-certificate">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">Drag and drop yourAttachment in PDF or image format here, or click to select a file.</small>
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



@endsection