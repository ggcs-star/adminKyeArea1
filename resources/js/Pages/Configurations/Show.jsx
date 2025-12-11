import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Show({ auth, project, type, config }) {
    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title="Configuration Detail" />

            <div className="p-6 max-w-6xl mx-auto ">
                {/* Header Section */}
               <div className="mb-8 ">
   

    <h1 className="text-3xl font-bold text-gray-900 mb-2 ">
        Configuration Details
    </h1>

    <div className="flex items-center gap-4 text-sm text-gray-600">
        <span className="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-medium">
            {type}
        </span>
        <span>Project: {project?.project.name}</span>
    </div>
     <button onClick={() => window.history.back()} className="text-sm text-blue-600">
        ← Back
    </button>
</div>


                {/* Summary Cards */}
                <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div className="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-5 border border-blue-200">
                        <div className="flex items-center gap-3">
                            <div className="p-2 bg-blue-100 rounded-lg">
                                <svg className="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                                </svg>
                            </div>
                            <div>
                                <p className="text-sm font-medium text-gray-600">Price</p>
                                <p className="text-xl font-bold text-gray-900">
                                    {config?.price ? `$${config.price}` : "-"}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div className="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-5 border border-green-200">
                        <div className="flex items-center gap-3">
                            <div className="p-2 bg-green-100 rounded-lg">
                                <svg className="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </div>
                            <div>
                                <p className="text-sm font-medium text-gray-600">BHK Options</p>
                                <p className="text-xl font-bold text-gray-900">
                                    {Object.keys(config || {}).filter(key => key !== "price" && key !== "floorplan_image_id").length}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div className="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-5 border border-purple-200">
                        <div className="flex items-center gap-3">
                            <div className="p-2 bg-purple-100 rounded-lg">
                                <svg className="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <p className="text-sm font-medium text-gray-600">Project Type</p>
                                <p className="text-xl font-bold text-gray-900 capitalize">{type}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {/* BHK Options Section */}
                <div className="space-y-6">
                    {Object.entries(config || {})
                        .filter(([key]) => key !== "price" && key !== "floorplan_image_id")
                        .map(([bhk, bhkData]) => (
                            <div key={bhk} className="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                                {/* BHK Header */}
                                <div className="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-4 border-b">
                                    <h3 className="text-xl font-bold text-gray-800 flex items-center gap-2">
                                        <span className="bg-blue-600 text-white px-3 py-1 rounded-lg text-sm">
                                            {bhk}
                                        </span>
                                        <span className="text-gray-600">Configuration</span>
                                    </h3>
                                </div>

                                <div className="p-6">
                                    {/* Price and Basic Info */}
                                    <div className="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                                        <div className="text-center p-4 bg-gray-50 rounded-lg">
                                            <p className="text-sm font-medium text-gray-600">Price</p>
                                            <p className="text-lg font-bold text-gray-900">{bhkData.price ?? "-"}</p>
                                        </div>
                                        <div className="text-center p-4 bg-gray-50 rounded-lg">
                                            <p className="text-sm font-medium text-gray-600">Size</p>
                                            <p className="text-lg font-bold text-gray-900">{bhkData.size ?? "-"}</p>
                                        </div>
                                        <div className="text-center p-4 bg-gray-50 rounded-lg">
                                            <p className="text-sm font-medium text-gray-600">Possession</p>
                                            <p className="text-lg font-bold text-gray-900">{bhkData.date ?? "-"}</p>
                                        </div>
                                    </div>

                                    {/* Rooms Section */}
                                    {bhkData.rooms && (
                                        <div className="mb-6">
                                            <h4 className="text-lg font-semibold text-gray-800 mb-3 flex items-center gap-2">
                                                <svg className="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                </svg>
                                                Room Details
                                            </h4>
                                            <div className="grid grid-cols-1 md:grid-cols-2 gap-3">
                                                {Object.entries(bhkData.rooms).map(([roomName, roomData]) => (
                                                    <div key={roomName} className="bg-gray-50 p-3 rounded-lg">
                                                        <p className="font-medium text-gray-800 capitalize">{roomName}</p>
                                                        <div className="mt-1 space-y-1">
                                                            {Object.entries(roomData).map(([key, value]) => (
                                                                <div key={key} className="flex justify-between text-sm">
                                                                    <span className="text-gray-600 capitalize">{key}:</span>
                                                                    <span className="font-medium text-gray-900">{value}</span>
                                                                </div>
                                                            ))}
                                                        </div>
                                                    </div>
                                                ))}
                                            </div>
                                        </div>
                                    )}

                                    {/* Image Galleries */}
                                    <div className="space-y-6">
                                        {/* Image Slider */}
                                        {bhkData.imageslider && (
                                            <div>
                                                <h4 className="text-lg font-semibold text-gray-800 mb-3">Image Gallery</h4>
                                                <div className="grid grid-cols-2 md:grid-cols-4 gap-3">
                                                    {bhkData.imageslider.map((img, idx) => (
                                                        <div key={idx} className="group relative">
                                                            <img
                                                                src={img.image}
                                                                alt={`${bhk} image ${idx + 1}`}
                                                                className="w-full h-32 object-cover rounded-lg transition-transform group-hover:scale-105"
                                                            />
                                                            <div className="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all rounded-lg" />
                                                        </div>
                                                    ))}
                                                </div>
                                            </div>
                                        )}

                                        {/* Floor Plans */}
                                        {bhkData.floorPlans && (
                                            <div>
                                                <h4 className="text-lg font-semibold text-gray-800 mb-3">Floor Plans</h4>
                                                <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
                                                    {bhkData.floorPlans.map((plan, idx) => (
                                                        <div key={idx} className="text-center group">
                                                            <div className="relative overflow-hidden rounded-lg bg-gray-100 p-2">
                                                                <img
                                                                    src={plan.imgFull}
                                                                    alt={plan.title}
                                                                    className="w-full h-24 object-contain transition-transform group-hover:scale-105"
                                                                />
                                                            </div>
                                                            <p className="mt-2 text-sm font-medium text-gray-700">{plan.title}</p>
                                                        </div>
                                                    ))}
                                                </div>
                                            </div>
                                        )}

                                        {/* Gallery Images */}
                                        {bhkData.galleryImages && (
                                            <div>
                                                <h4 className="text-lg font-semibold text-gray-800 mb-3">Additional Images</h4>
                                                <div className="grid grid-cols-2 md:grid-cols-4 gap-3">
                                                    {bhkData.galleryImages.map((img, idx) => (
                                                        <div key={idx} className="group relative">
                                                            <img
                                                                src={img.full}
                                                                alt={img.alt}
                                                                className="w-full h-32 object-cover rounded-lg transition-transform group-hover:scale-105"
                                                            />
                                                        </div>
                                                    ))}
                                                </div>
                                            </div>
                                        )}
                                    </div>
                                </div>
                            </div>
                        ))}
                </div>

                {/* Empty State */}
                {Object.keys(config || {}).filter(key => key !== "price" && key !== "floorplan_image_id").length === 0 && (
                    <div className="text-center py-12">
                        <div className="bg-gray-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <svg className="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 className="text-lg font-medium text-gray-900 mb-2">No configurations found</h3>
                        <p className="text-gray-600">There are no BHK configurations available for this project.</p>
                    </div>
                )}
            </div>
        </AuthenticatedLayout>
    );
}