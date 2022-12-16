@extends('admin.layouts.master')

@section('title', "FAQ Section")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">FAQs Section</h5>
    </div>
</div>
<div class="card">
    <div class="card-body">
       <form action="{{route('admin.section.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form-group">
                <label class="col-md-2 form-label">FAQ Title</label>
                <div class="col-md-10">
                    <input type="text" name="faq_title" value="{{get_section('faq_title')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Question 1</label>
                <div class="col-md-10">
                    <input type="text" name="faq_q1" value="{{get_section('faq_q1')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Answer 1</label>
                <div class="col-md-10">
                    <input type="text" name="faq_a1" value="{{get_section('faq_a1')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Question 2</label>
                <div class="col-md-10">
                    <input type="text" name="faq_q2" value="{{get_section('faq_q2')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Answer 2</label>
                <div class="col-md-10">
                    <input type="text" name="faq_a2" value="{{get_section('faq_a2')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Question 3</label>
                <div class="col-md-10">
                    <input type="text" name="faq_q3" value="{{get_section('faq_q3')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Answer 3</label>
                <div class="col-md-10">
                    <input type="text" name="faq_a3" value="{{get_section('faq_a3')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection