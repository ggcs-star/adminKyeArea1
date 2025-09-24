import React from "react";
import { Head, Link } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

const ParkingView = ({ auth, project }) => {
    const parking = project.parking || {};

    const parkingFeatures = [
        { key: 'total_parking_slots', label: 'Total Parking Slots', icon: '🚗', value: parking.total_parking_slots || 'Not specified' },
        { key: 'two_wheeler_parking', label: 'Two Wheeler Parking', icon: '🏍️', value: parking.two_wheeler_parking || 'Not specified' },
        { key: 'four_wheeler_parking', label: 'Four Wheeler Parking', icon: '🚙', value: parking.four_wheeler_parking || 'Not specified' },
        { key: 'visitor_parking', label: 'Visitor Parking', icon: '👥', value: parking.visitor_parking || 'Not specified' },
        { key: 'slot_info', label: 'Slot Information', icon: '📋', value: parking.slot_info || 'Not specified' },
        { key: 'basement_ground', label: 'Basement / Ground', icon: '🏢', value: parking.basement_ground || 'Not specified' },
        { key: 'covered_parking', label: 'Covered Parking', icon: '🛡️', value: parking.covered_parking || 'Not specified' }
    ];

    const booleanFeatures = [
        { key: 'ev_charging', label: 'EV Charging', icon: '⚡', value: parking.ev_charging },
        { key: 'car_wash_area', label: 'Car Wash Area', icon: '🧼', value: parking.car_wash_area },
        { key: 'disabled_friendly', label: 'Disabled Friendly', icon: '♿', value: parking.disabled_friendly },
        { key: 'cctv_security', label: 'CCTV Security', icon: '📹', value: parking.cctv_security }
    ];

    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title={`Parking Details - ${project.project?.name || project.name}`} />

            <div className="min-h-screen bg-gradient-to-br from-gray-50 to-green-50/30 py-8">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    {/* Header Section */}
                    <div className="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-8">
                        <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                            <div className="flex items-center mb-4 lg:mb-0">
                                <div className="bg-gradient-to-br from-green-500 to-emerald-600 p-3 rounded-2xl shadow-lg mr-4">
                                    <svg className="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                    </svg>
                                </div>
                                <div>
                                    <h1 className="text-3xl font-bold text-gray-900">Parking Information</h1>
                                    <p className="text-lg text-gray-600 mt-1 flex items-center">
                                        for <span className="ml-2 px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium">
                                            {project.project?.name || project.name}
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div className="flex space-x-3">
                                <Link
                                    href={route("parking.index")}
                                    className="flex items-center px-4 py-2 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200 font-medium"
                                >
                                    <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                    </svg>
                                    Back to List
                                </Link>

                            </div>
                        </div>
                    </div>

                    {/* Parking Information Card */}
                    <div className="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                        {/* Card Header */}
                        <div className="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-4 border-b border-gray-200">
                            <div className="flex items-center justify-between">
                                <h2 className="text-lg font-semibold text-gray-900 flex items-center">
                                    <svg className="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    Parking Details
                                </h2>
                                <span className="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                                    Last Updated: {parking.updated_at ? new Date(parking.updated_at).toLocaleDateString() : 'N/A'}
                                </span>
                            </div>
                        </div>

                        {/* Parking Details Grid */}
                        <div className="p-6">
                            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                                {parkingFeatures.map((feature) => (
                                    <div key={feature.key} className="bg-gray-50 rounded-xl p-5 hover:bg-gray-100 transition-colors duration-200">
                                        <div className="flex items-center mb-3">
                                            <span className="text-2xl mr-3">{feature.icon}</span>
                                            <h3 className="text-sm font-semibold text-gray-700 uppercase tracking-wide">
                                                {feature.label}
                                            </h3>
                                        </div>
                                        <div className="pl-9 text-lg font-semibold text-gray-900">
                                            {feature.value}
                                        </div>
                                    </div>
                                ))}
                            </div>

                            {/* Features Section */}
                            <div className="border-t border-gray-200 pt-6">
                                <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <svg className="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Additional Features
                                </h3>
                                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    {booleanFeatures.map((feature) => (
                                        <div key={feature.key} className={`flex items-center p-3 rounded-lg border ${feature.value
                                                ? 'bg-green-50 border-green-200'
                                                : 'bg-gray-50 border-gray-200'
                                            }`}>
                                            <span className="text-2xl mr-3">{feature.icon}</span>
                                            <div>
                                                <div className="text-sm font-medium text-gray-900">{feature.label}</div>
                                                <span className={`text-xs font-medium ${feature.value ? 'text-green-600' : 'text-gray-500'
                                                    }`}>
                                                    {feature.value ? 'Available' : 'Not Available'}
                                                </span>
                                            </div>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default ParkingView;