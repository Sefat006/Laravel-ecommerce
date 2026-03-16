<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::latest()->get();
        return view('admin.faq.index', compact('faq'));
    }



    public function create()
    {
        return view('admin.faq.create');
    }




        public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);


        Faq::create([
            'en_question' => $request->question,
            'en_answer' => $request->answer,
        ]);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ created Successfully');
    }



    public function edit($id)
    {
        $faq = Faq::findOrFail($id);

        return view('admin.faq.edit', compact('faq'));
    }




    public function update(Request $request, $id)
    {
        $faq = Faq::findOrFail($id);
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq->update([
            'en_question' => $request->question,
            'en_answer' => $request->answer,
        ]);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ updated successfully.');
    }






    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);

        $faq->delete();

        return redirect()->route('admin.faq.index')->with('success', 'Faq deleted successfully.');
    }
}
