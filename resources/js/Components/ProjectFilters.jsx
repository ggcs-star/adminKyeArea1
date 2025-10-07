// resources/js/Components/ProjectFilters.jsx
import React from 'react';

export default function ProjectFilters({ filters, onFilterChange }) {
    return (
        <div className="bg-white p-4 rounded-lg shadow-sm mb-6">
            <div className="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">
                        Search
                    </label>
                    <input
                        type="text"
                        value={filters.search || ''}
                        onChange={(e) => onFilterChange('search', e.target.value)}
                        className="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Search projects..."
                    />
                </div>
                
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">
                        Status
                    </label>
                    <select
                        value={filters.status || ''}
                        onChange={(e) => onFilterChange('status', e.target.value)}
                        className="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
                
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">
                        Featured
                    </label>
                    <select
                        value={filters.featured || ''}
                        onChange={(e) => onFilterChange('featured', e.target.value)}
                        className="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >
                        <option value="">All</option>
                        <option value="1">Featured Only</option>
                        <option value="0">Non-Featured</option>
                    </select>
                </div>
                
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">
                        Builder
                    </label>
                    <select
                        value={filters.builder_id || ''}
                        onChange={(e) => onFilterChange('builder_id', e.target.value)}
                        className="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >
                        <option value="">All Builders</option>
                        {/* Populate with builders from props */}
                    </select>
                </div>
            </div>
        </div>
    );
}