
                          <!-- start user projects -->
                          <table class="data table table-striped no-margin">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Service Type</th>
                                {{-- <th class="hidden-phone">Service Catogety</th> --}}
                                <th>Created Time</th>
                                <th>Delivary Method</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                                <th>Status</th>
                                <th>Notes</th>
                              </tr>
                            </thead>


                            @foreach ($services as $service)

                                @if ($service->service_status == true)
                                
                                    @if (!$service->certificate_type == null)

                                        @php

                                            $serviceType = $service->certificate_type;

                                        @endphp



                                    @elseif (!$service->nic_service_type == null)


                                        @php

                                        $serviceType = $service->nic_service_type;

                                        @endphp


                                    
                                    @elseif (!$service->passport_type == null)


                                        @php

                                        $serviceType = $service->passport_type;

                                        @endphp

                                                                        
                                    @elseif (!$service->v_emission_type == null)


                                            @php

                                            $serviceType = $service->v_emission_type;

                                            @endphp    

                                    @elseif (!$service->appointment_type == null)


                                            @php

                                            $serviceType = $service->appointment_type;

                                            @endphp 

                                    @else

                                        @php

                                            $serviceType = "Unknown";

                                        @endphp

                                    
                                    @endif
                                    
                                    @php

                                        if($service->service_type == 'appointment')
                                        {
                                            $paymentStatus = "N/A";
                        
                                        }
                                        else {
                                            $paymentStatus = $service->service_payment ? "Paid" : "Pending";
                                        }
                                    
                                   // $totalPayment = isset($service->payments) ? $service->payments->total : 'N/A';
                                    @endphp

                                     {{-- @dd($service->payments) --}}
                                    <!-- Display the service information -->
                                    <div>
                                        
                                        <tbody>
                                            <tr>
                                              <td>{{$service->id}}</td>
                                              <td>{{ $serviceType}}</td>
                                              <td>{{ \Carbon\Carbon::parse($service->created_at)->format('F j, Y') }}</td>
                                              <td>{{$service->service_type == 'Appointment'? "N/A": $service->delivary_method}}</td>
                                              <td>{{$service->service_type == 'Appointment'? "N/A":  $service->total}}</td>
                                              <td>{{$paymentStatus}}</td>
                                              <td>{{$service->service_status==0?'Pending':($service->service_status==1?'Cancelled':($service->service_status==2?($service->service_type=='Appointment'?'Rescheduled':'Rejected'):($service->service_status==-1?'Cancelled':'Completed')))}}</td>
                                              <td>
                                              @if($service->service_type == 'Appointment')
                                              Date: {{date('Y-m-d H:i A',strtotime($service->reschedule_date))}}
                                              @endif
                                              {{$service->reject_note}}
                                              
                                              </td>
                                            </tr>
                                        </tbody>
                                        
                                    </div>
                                    
                                @endif

                            @endforeach



                          </table>
                          <!-- end user projects -->