@extends('dashboard-admin.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table>
            <tr>
                <td>
                    <a href="/dashboard/competition">
                        <span class="back-create" data-feather="arrow-left"></span>
                    </a>
                </td>
                <td style="padding-left: 150px">
                    <h4>Update Competition</h4>
                </td>
            </tr>
        </table>

    </div>
    <div class='col-lg-6'>
        <form method="post" action='/dashboard/competition/{{ $competition->id }}'>
            @method('put')
            @csrf
            <div class="mb-3">
                <h6>Name</h6>
                <input class="form-control" type="string" name="name" value="{{ $competition->name }}" required>
            </div>
            <div class="mb-3">
                <h6>Year</h6>
                <input class="form-control" type="string" name="year" value="{{ $competition->year }}" required>
            </div>
            <div class="mb-3">
                <h6>Group Link</h6>
                <input class="form-control" type="string" name="group_link" value="{{ $competition->group_link }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"><h6>Description</h6></label>
                <textarea id="description" class="form-control" name="description" rows="5" required>{{ $competition->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
@endsection
