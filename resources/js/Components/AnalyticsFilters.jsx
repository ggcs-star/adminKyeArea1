// resources/js/Components/AnalyticsFilters.jsx
import React from 'react';

export default function AnalyticsFilters({ filters, onFilterChange }) {
    return (
        <div className="bg-white p-4 rounded-lg shadow-sm mb-6">
            <div className="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">
                        Time Period
                    </label>
                    <select
                        value={filters.period || '12months'}
                        onChange={(e) => onFilterChange('period', e.target.value)}
                        className="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >
                        <option value="3months">Last 3 Months</option>
                        <option value="6months">Last 6 Months</option>
                        <option value="12months">Last 12 Months</option>
                        <option value="all">All Time</option>
                    </select>
                </div>
                
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">
                        Project Status
                    </label>
                    <select
                        value={filters.status || 'all'}
                        onChange={(e) => onFilterChange('status', e.target.value)}
                        className="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >
                        <option value="all">All Status</option>
                        <option value="active">Active Only</option>
                        <option value="inactive">Inactive Only</option>
                    </select>
                </div>
                
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">
                        Builder
                    </label>
                    <select
                        value={filters.builder || 'all'}
                        onChange={(e) => onFilterChange('builder', e.target.value)}
                        className="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >
                        <option value="all">All Builders</option>
                        {/* Dynamic builders would be populated here */}
                    </select>
                </div>
                
                <div className="flex items-end">
                    <button
                        onClick={() => onFilterChange('reset', true)}
                        className="w-full bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500"
                    >
                        Reset Filters
                    </button>
                </div>
            </div>
        </div>
    );
}