@extends('layouts.app')

@section('content')
    <h4>Restock Item</h4>
    <form method="post" action="/restock/{{$item->RILID}}" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="background-color: #f2f2f2;">
                    <div class="card-body">
                        <h4 class="card-title">Event Form</h4>

                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Event
                                Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email1" name="Event_Name" placeholder=""
                                       value="{{ $event->Event_Name }}" disabled style="background-color: white;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Date
                                From</label>
                            <div class="col-sm-2">


                                <input type="text" class="form-control" id="email1" name="Date_From" placeholder=""
                                       value="{{   $newDate = date("m/d/Y", strtotime($event->Date_From)) }}"
                                       disabled style="background-color: white;">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Date To</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="email1" name="Date_To" placeholder=""
                                       value="{{   $newDate = date("m/d/Y", strtotime($event->Date_To)) }}" disabled
                                       style="background-color: white;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1"
                                   class="col-sm-3 text-right control-label col-form-label">Location</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="email1" name="Location" placeholder=""
                                       value="{{ $event->Location }}" disabled style="background-color: white;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1"
                                   class="col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="email1" name="Event_Name" placeholder=""
                                          value="{{ $event->Description }}" disabled cols="5" rows="5"
                                          style="background-color: white;">{{ $event->Description }}</textarea>
                            </div>
                        </div>
                        {{--                        <div class="form-group row">--}}
                        {{--                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Event--}}
                        {{--                                Type</label>--}}
                        {{--                            <div class="col-md-9">--}}
                        {{--                                <select class="select2 form-control custom-select"--}}
                        {{--                                        style="width: 40%; height:36px;background-color: white;" name='Event_Type'--}}
                        {{--                                        disabled>--}}
                        {{--                                    <option value="">Select</option>--}}
                        {{--                                    @foreach($event as  $type)--}}
                        {{--                                        <option--}}
                        {{--                                            value="{{ $type->Type_Name}}" {{$type->Type_Name == $event->Event_Type  ? 'selected' : ''}} >{{ $type->Type_Name }}</option>--}}
                        {{--                                    @endforeach--}}
                        {{--                                </select>--}}

                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <input type="hidden" name="CUID" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="UUID" value="{{ Auth::user()->id }}">
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="background-color: #f2f2f2;">
                    <div class="card-body">
                        <h4 class="card-title">Request Form</h4>
                        <div class="form-group row">
                            <label for="lname"
                                   class="col-sm-3 text-right control-label col-form-label">Requester</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="email1" name="Requester"
                                       style="width: 450px;background-color: white;"
                                       value="{{ $item_request->Requester }}" disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Responsible
                                Person</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="email1" name="Responsible_Person"
                                       style="width: 450px;background-color: white;"
                                       value="{{ $item_request->Responsible_person }}" disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Phone
                                Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="email1" name="Phone_Number"
                                       style="width: 450px;background-color: white;"
                                       value="{{ $item_request->Phone_Number }}" disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Return
                                Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="email1" name="Return_date"
                                       style="width: 450px;background-color: white;"
                                       value="{{$item_request->Return_date}}" disabled>
                            </div>
                        </div>

                        <input type="hidden" name="CUID" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="UUID" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="IRID" value="{{ $item_request->IRID }}">
                    </div>

                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Item Restock Form</h4>
                <div class="form-group row">
                    <label for="issued_quantity"
                           class="col-sm-3 col-lg-3 text-right control-label col-form-label">{{ \App\Models\Stock_item::find($item->ItemCode)->Item_Code }}</label>
                    <div class="col-sm-3 col-lg-2 ">
                        <input type="text" class="form-control"
                               readonly
                               value="{{$item->Item_Remaining > 0?$item->Item_Remaining: $item->IssuedQuantity}}">
                    </div>

                    <div class="col-sm-3 col-lg-2 ">
                        <input type="number" class="form-control"
                               name="returned_quantity"
                               min="0" max="{{$item->IssuedQuantity}}"
                               placeholder="Returned Quantity" required>
                    </div>
                    <div class="col-sm-3 col-lg-2">
                        <select name="damage_status" class="form-control" required>
                            <option hidden selected value="">Choose item status</option>
                            <option value="Good">Good</option>
                            <option value="Damaged">Damaged</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-lg-2">
                        <input required class="form-control" type="file" accept="image/*" name="item_image"
                               placeholder="Insert image of the returned item">
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top">
            <div class="card-body">
                <button type="submit" name="Submit" class="btn btn-success">Returned</button>
            </div>
        </div>

    </form>
@endsection
