<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Status;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort');
        if($sort != 'asc'|| $sort != 'desc')
        {
            $sort = 'desc';
        }

        $status = $request->input('status');
        $validate = $request->validate([
            'status' => 'exists:statuses,id'
        ]);
        if($validate)
        {
            $reports = Report::where('status_id', $status)->orderBy('created_at')->paginate(4);
        }
        else{
            $reports = Report::orderBy('created_at', $sort)->paginate(4);
        }
        $statuses = Status::all();

        return view('report.index', compact('reports', 'statuses', 'sort', 'status'));
    }

    public function store(Request $request, Report $report)
    {
        $data = $request -> validate([
            'number' => 'required|string',
            'des' => 'required|string'
        ]);
        $report->create($data);
        return redirect()->route('reports.index');
    }

    public function edit(Report $report)
    {
        return view('report.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $data = $request -> validate([
            'number' => 'required|string',
            'des' => 'required|string'
        ]);
        $report->update($data);
        return redirect()->route('reports.index');
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->back();
    }
}
