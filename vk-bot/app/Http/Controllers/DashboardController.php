<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\PublicModel;
use App\Models\ContestModel; // Убедитесь, что это правильное пространство имен

class DashboardController extends Controller
{
    public function showDashboard()
    {
        // Determine the active tab based on some logic (for example, request parameters)
        $activeTab = request('tab', 'publics');

        // Fetch other necessary data
        $publics = PublicModel::all(); // Adjust this line based on your actual implementation
        $contests = ContestModel::all(); // Adjust this line based on your actual implementation

        // Pass data to the view
        return view('dashboard', [
            'activeTab' => $activeTab,
            'publics' => $publics,
            'contests' => $contests,
            // Add other data you want to pass to the view
        ]);
    }
    
    

    public function someAction()
    {
        // Perform some action, and then redirect to the dashboard with the 'publics' tab active
        // For example, after submitting a form
        // ...

        return redirect()->route('dashboard', ['tab' => 'publics']);
    }
}
