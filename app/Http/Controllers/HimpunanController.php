<?php

namespace App\Http\Controllers;

use App\Models\Himpunan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\HimpunanStoreRequest;
use App\Http\Requests\HimpunanUpdateRequest;

class HimpunanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Himpunan::class);

        $search = $request->get('search', '');

        $himpunans = Himpunan::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.himpunans.index', compact('himpunans', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Himpunan::class);

        return view('app.himpunans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HimpunanStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Himpunan::class);

        $validated = $request->validated();

        $himpunan = Himpunan::create($validated);

        return redirect()
            ->route('himpunans.edit', $himpunan)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Himpunan $himpunan): View
    {
        $this->authorize('view', $himpunan);

        return view('app.himpunans.show', compact('himpunan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Himpunan $himpunan): View
    {
        $this->authorize('update', $himpunan);

        return view('app.himpunans.edit', compact('himpunan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        HimpunanUpdateRequest $request,
        Himpunan $himpunan
    ): RedirectResponse {
        $this->authorize('update', $himpunan);

        $validated = $request->validated();

        $himpunan->update($validated);

        return redirect()
            ->route('himpunans.edit', $himpunan)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Himpunan $himpunan
    ): RedirectResponse {
        $this->authorize('delete', $himpunan);

        $himpunan->delete();

        return redirect()
            ->route('himpunans.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
