@extends('app')

@section('htmlheader_title')
Home
@endsection


@section('main-content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Config parameters in system</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="col-sm-12 table-responsive">
                    <table id="example1" class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th class="col-sm-2 col-xs-4">Parameter</th>
                                <th class="col-sm-3 col-xs-6" >Description</th>
                                <th class="col-sm-5 hidden-xs">Value</th>
                                <th class="col-sm-2 col-xs-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($configs as $config)
                            <tr>
                                <td class="col-sm-2 col-xs-4">{{$config->key }}</td>
                                <td class="col-sm-3 col-xs-6" style="white-space: pre-line">{{$config->description }}</td>
                                <td class="col-sm-5 hidden-xs" style="white-space: pre-line">{{$config->value }}</td>
                                <td class="col-sm-2 col-xs-3">
                                    <a href="{{ route('configsys.edit', $config->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>


                <div class="col-sm-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Number of records: {{$configs->total()}}</div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        {!! $configs->setPath('')->appends(['filterKey' => old('filterKey'),'filterDescription' => old('filterDescription')])->render() !!}
                    </div>
                </div>

        </div>
    </div><!-- /.box-body -->
</div>


@endsection
