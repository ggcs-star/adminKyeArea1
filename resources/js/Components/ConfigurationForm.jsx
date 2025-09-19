import React, { useState, useEffect } from "react";
import { Inertia } from "@inertiajs/inertia";
import { usePage } from "@inertiajs/react";

const ConfigurationForm = ({ closeModal, configData }) => {
    const { projects } = usePage().props; 

 
    const [form, setForm] = useState({
        project_id: "",
        type: "",
        price: "",

    });

  
    useEffect(() => {
        if (configData) {
            setForm({
                project_id: configData.project_id || configData.project?.id || "",
                type: configData.typeKey || "",
                price: configData.price || "",
            });
        } else {
            setForm({
                project_id: "",
                type: "",
                price: "",
            });
        }
    }, [configData]);


    const handleChange = (e) => {
        setForm({ ...form, [e.target.name]: e.target.value });
    };

   const handleSubmit = (e) => {
    e.preventDefault();

    if (configData) {
       
        Inertia.put(`/configurations/${configData.project_id}`, {
            type: form.type,       
            old_type: configData.typeKey, 
            price: form.price,
        }, {
            onSuccess: () => closeModal(),
        });
    } else {
        
        Inertia.post("/configurations", form, {
            onSuccess: () => closeModal(),
        });
    }



    };

    return (
        <form onSubmit={handleSubmit} className="space-y-6">
            {/* Project Select */}
            <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                    Project
                </label>
                <select
                    name="project_id"
                    value={form.project_id}
                    onChange={handleChange}
                    required
                    disabled={!!configData}
                    className="w-full border px-4 py-2 rounded-lg"
                >
                    <option value="">-- Select Project --</option>
                    {projects.map((project) => (
                        <option key={project.id} value={project.id}>
                            {project.name}
                        </option>
                    ))}
                </select>

                
            </div>

            {/* Type */}
            <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                    Type
                </label>
                <input
                    type="text"
                    name="type"
                    value={form.type}
                    onChange={handleChange}
                    required
                    className="w-full border px-4 py-2 rounded-lg"
                />
            </div>

            {/* Price */}
            <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                    Price
                </label>
                <input
                    type="text"
                    name="price"
                    value={form.price}
                    onChange={handleChange}
                    required
                    className="w-full border px-4 py-2 rounded-lg"
                />
            </div>

            {/* Buttons */}
            <div className="flex justify-end space-x-3">
                <button
                    type="button"
                    className="px-4 py-2 bg-gray-300 rounded-lg"
                    onClick={closeModal}
                >
                    Cancel
                </button>
                <button
                    type="submit"
                    className="px-4 py-2 bg-blue-600 text-white rounded-lg"
                >
                    {configData ? "Update" : "Save"}
                </button>
            </div>
        </form>
    );
};

export default ConfigurationForm;
