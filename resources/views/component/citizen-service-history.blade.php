
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
                                    
                                    @if ($service->service_payment == true)
                                        @php
                                            $paymentStatus = "Paid";
                                        @endphp
                                    @else
                                        @php
                                            $paymentStatus = "Pending";
                                        @endphp
                                    @endif


                                     {{-- @dd($service->payments) --}}
                                    <!-- Display the service information -->
                                    <div>
                                        
                                        <tbody>
                                            <tr>
                                              <td>{{$service->id}}</td>
                                              <td>{{ $serviceType}}</td>
                                              <td>{{ \Carbon\Carbon::parse($service->created_at)->format('F j, Y') }}</td>
                                              <td >{{$service->delivary_method}}</td>
                                              <td >{{$service->total}}</td>
                                              <td>{{$paymentStatus}}</td>
                                            </tr>
                                        </tbody>
                                        
                                    </div>
                                    
                                @endif

                            @endforeach



                          </table>
                          <!-- end user projects -->