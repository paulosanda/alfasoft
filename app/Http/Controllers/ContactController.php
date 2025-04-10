<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(
        protected Contact $contact
    )
    {}
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $this->contact->all()->sortBy('name');

        return view('contact-index', [
            'contacts' => $this->contact->all()->sortBy('name'),
        ]);
    }

    public function show(int $id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $contact = $this->contact->findOrFail($id);

        return view('contact', [
            'contact' => $contact,
        ]);
    }

    public function edit(int $id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $contact = $this->contact->findOrFail($id);

        return view('contact-edit', [
            'contact' => $contact,
        ]);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $contact = $this->contact->findOrFail($id);

        $contact->update($request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|size:9|regex:/^[0-9]+$/',
        ]));

        return redirect()->route('contact.index');
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('contact-create');
    }

    public function store(Request $request): RedirectResponse
    {
        $newContact = $this->contact->create($request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|size:9|regex:/^[0-9]+$/',
        ]));

        return redirect()->route('contact.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        $contact = $this->contact->findOrFail($id);

        $contact->delete();


        return redirect()->route('contact.index');
    }
}
