<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('report.index', compact('reports'));
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
