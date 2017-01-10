<!-- /**
 * Created by PhpStorm.
 * User: amontes
 * Date: 12/13/2016
 * Time: 10:26 AM
 */  -->
@extends('template.main')

@section('title')
    Dashboard Upload Files
@endsection

@section('content')
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Upload Data</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">SoldTo:</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="SoldTo Number" class="form-control input-md">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Account Name</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="account-name" class="form-control">
                        <option value="1">Option one</option>
                        <option value="2">Option two</option>
                    </select>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Business Name</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="business-name" class="form-control">
                        <option value="1">Option one</option>
                        <option value="2">Option two</option>
                    </select>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Country</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="country-name" class="form-control">
                        <option value="1">Option one</option>
                        <option value="2">Option two</option>
                    </select>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">Segment</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="radios-0">
                            <input type="radio" name="segment" id="radios-0" value="1" checked="checked">
                            LE
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-1">
                            <input type="radio" name="segment" id="radios-1" value="2">
                            GLOBAL
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">B2B</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="radios-0">
                            <input type="radio" name="b2b" id="radios-0" value="1" checked="checked">
                            YES
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-1">
                            <input type="radio" name="b2b" id="radios-1" value="2">
                            NO
                        </label>
                    </div>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">GEO</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="geo" class="form-control">
                        <option value="1">AP</option>
                        <option value="2">AG</option>
                        <option value="3">EMEA</option>
                        <option value="4">LA</option>
                    </select>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Web PM</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="pm-name" class="form-control">
                        <option value="1">Option one</option>
                        <option value="2">Option two</option>
                    </select>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </fieldset>
    </form>
@endsection