<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Kitchen - Online Store';
        $viewData['subtitle'] = 'Reviews';
        $viewData['reviews'] = Review::all();

        return view('review.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $review = Review::findOrFail($id);
        $viewData['title'] = $review['name'].' - Online Store';
        $viewData['subtitle'] = $review['name'].' - Review';
        $viewData['review'] = $review;

        return view('review.show')->with('viewData', $viewData);
    }

    public function create(string $product_id): View
    {
        $viewData = [];
        $viewData['title'] = 'Create review';
        $viewData['product'] = $product_id;

        return view('review.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'rating' => 'required',
            'product_id' => ['required', 'exists:products,id'],
        ]);

        $review = new Review($request->only(['name', 'title', 'description', 'rating', 'product_id']));
        $review->user_id = $user->id;
        $review->save();

        Session::flash('success', 'Element created successfully.');

        return redirect()->back();

    }

    public function delete($id): RedirectResponse
    {
        Review::destroy($id);

        Session::flash('success', 'Review deleted successfully.');

        return redirect()->route('review.index');
    }
}
