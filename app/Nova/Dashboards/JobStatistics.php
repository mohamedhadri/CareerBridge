<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Dashboard;

class JobStatistics extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            // new TotalJobs,
            // new JobsPerEmployer,
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'job-statistics';
    }
}
