@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif



    <form method="post" action="/Event/{{ $RealEvent->EVID }}" class="form-horizontal">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Event Form</h4>

                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Event
                                Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email1" name="Event_Name" placeholder=""
                                       readonly value="{{ $RealEvent->Event_Name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Date
                                From</label>
                            <div class="col-sm-2">


                                <input type="text" class="form-control" id="email1" name="Date_From" placeholder=""
                                       value="{{   $newDate = date("m/d/Y", strtotime($RealEvent->Date_From)) }}"
                                       disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Date To</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="email1" name="Date_To" placeholder=""
                                       value="{{   $newDate = date("m/d/Y", strtotime($RealEvent->Date_To)) }}"
                                       disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1"
                                   class="col-sm-3 text-right control-label col-form-label">Location</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="email1" name="Location" placeholder=""
                                       value="{{ $RealEvent->Location }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1"
                                   class="col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="email1" name="Event_Name" placeholder=""
                                          value="{{ $RealEvent->Description }}" disabled cols="5"
                                          rows="5">{{ $RealEvent->Description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Event
                                Type</label>
                            <div class="col-md-9">
                                <select class="select2 form-control custom-select" style="width: 40%; height:36px;"
                                        name='Event_Type' disabled>
                                    <option value="">Select</option>
                                    @foreach($event as  $type)
                                        <option
                                            value="{{ $type->Type_Name}}" {{$type->Type_Name == $RealEvent->Event_Type  ? 'selected' : ''}} >{{ $type->Type_Name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <input type="hidden" name="CUID" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="UUID" value="{{ Auth::user()->id }}">
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Request Form</h4>
                        <div class="form-group row">
                            <label for="lname"
                                   class="col-sm-3 text-right control-label col-form-label">Requester</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="email1" name="Requester"
                                       style="width: 450px;" value="{{ $ItemRequest->Requester }}" disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Responsible
                                Person (BGI)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="email1" name="Responsible_Person_BGI"
                                       style="width: 450px;" value="{{ $ItemRequest->Responsible_person_BGI }}" disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Phone
                                Number (BGI)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="email1" name="Phone_Number_BGI"
                                       style="width: 450px;" value="{{ $ItemRequest->Phone_Number_BGI }}" disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Responsible
                                Person (Client)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="email1" name="Responsible_Person_Client"
                                       style="width: 450px;" value="{{ $ItemRequest->Responsible_person_Client }}" disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Phone
                                Number (Client)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="email1" name="Phone_Number_Client"
                                       style="width: 450px;" value="{{ $ItemRequest->Phone_Number_Client }}" disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Return
                                Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="email1" name="Return_date"
                                       style="width: 450px;" disabled>
                            </div>
                        </div>

                        <input type="hidden" name="CUID" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="UUID" value="{{ Auth::user()->id }}">
                    </div>

                </div>
            </div>
            @role('Admin')
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Approval</h5>
                        @role('Approver_One')
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Approval
                                One</label>
                            <div class="col-md-9">
                                <select class="select2 form-control custom-select" style="width: 40%; height:36px;"
                                        name='first_approver_status' required>
                                    <option value="Pending" selected>< Not Yet Approved ></option>
                                    <option
                                        value="Approved">
                                        Approved
                                    </option>
                                    <option
                                        value="Rejected">
                                        Reject
                                    </option>

                                </select>

                            </div>
                        </div>
                        @endrole
                        @role('Approver_Two')
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Approval
                                Two</label>
                            <div class="col-md-9">
                                <select class="select2 form-control custom-select" style="width: 40%; height:36px;"
                                        name='second_approver_status' required>
                                    <option value="Pending" selected>< Not Yet Approved ></option>
                                    <option
                                        value="Approved">
                                        Approved
                                    </option>
                                    <option
                                        value="Rejected">
                                        Reject
                                    </option>

                                </select>

                            </div>
                        </div>
                        @endrole
                    </div>
                </div>
            </div>
            @endrole
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Item Selection Form</h4>
                @foreach($requested_items as $requested_item)
                    <div class="form-group row">
                        <label for="email1"
                               class="col-sm-3 text-right control-label col-form-label">{{ \App\Models\Stock_item::query()->find($requested_item->ItemCode)->Item_Code }}</label>
                        <div class="col-sm-4">
                            @role('Approver_One')
                            <div class="col-sm-8 col-lg-9">
                                <input type="number" class="form-control"
                                       name="first_approver_quantity_array[][{{$requested_item->Stock_ID}}]"
                                       min="0"
                                       max="{{ $requested_item->Approval1Quantity??\App\Models\stock::query()->find($requested_item->Stock_ID)->Quantity}}"
                                       value="{{ $requested_item->Quantity}}"
                                       placeholder="Requested Quantity: {{ $requested_item->Quantity}}" required>
                            </div>
                            @endrole

                            @role('Approver_Two')
                            <div class="col-sm-8 col-lg-9">
                                <input type="number" class="form-control" id="second_approver_quantity"
                                       name="second_approver_quantity_array[][{{$requested_item->Stock_ID}}]"
                                       min="0"
                                       max="{{ $requested_item->Approval1Quantity??\App\Models\stock::query()->find($requested_item->Stock_ID)->Quantity}}"
                                       value="{{ $requested_item->Approval1Quantity}}"
                                       placeholder="First Approved : {{ $requested_item->Approval1Quantity  ?? "Haven't Approved Yet"}}"
                                       required>
                            </div>
                            @endrole
                        </div>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="email1"
                                   placeholder="Quantity in Stock : {{\App\Models\stock::query()->where('Item',$requested_item->ItemCode)->first()->Quantity}}"
                                   disabled>

                        </div>

                    </div>

                @endforeach
            </div>

        </div>


        <div class="border-top">
            <div class="card-body">
                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

@endsection()
