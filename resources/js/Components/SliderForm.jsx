import React, { useState } from "react";
import { Inertia } from "@inertiajs/inertia";

export default function SliderForm({ closeModal, slider }) {
    const [form, setForm] = useState({
        title: slider?.title || "",
        caption: slider?.caption || "",
        order: slider?.order || 0,
        is_active: slider?.is_active ?? true,
        image: null,
    });

    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setForm({
            ...form,
            [name]: type === "checkbox" ? checked : value,
        });
    };

    const handleFile = (e) => {
        setForm({ ...form, image: e.target.files[0] });
    };

    const handleSubmit = (e) => {
        e.preventDefault();

        const data = new FormData();
        data.append("title", form.title);
        data.append("caption", form.caption);
        data.append("order", form.order);
        data.append("is_active", form.is_active ? 1 : 0);
        if (form.image) data.append("image", form.image);

 if (slider) {
    const data = new FormData();
    data.append("_method", "PUT"); // Laravel understands this as PUT
    data.append("title", form.title);
    data.append("caption", form.caption);
    data.append("order", form.order);
    data.append("is_active", form.is_active ? 1 : 0);
    if (form.image) data.append("image", form.image);

    Inertia.post(`/sliders/${slider._id}`, data, {
        onSuccess: () => closeModal(),
    });
} else {
 const data = new FormData();
data.append("title", form.title);
data.append("caption", form.caption);
data.append("order", form.order);
data.append("is_active", form.is_active ? 1 : 0);
if (form.image) data.append("image", form.image); // required


    Inertia.post("/sliders", data, {
        onSuccess: () => closeModal(),
    });
}


        
    };

    return (
        <form onSubmit={handleSubmit} encType="multipart/form-data">
            <h2 className="text-xl font-semibold mb-4">
                {slider ? "Edit Slider" : "Create Slider"}
            </h2>

            <div className="mb-3">
                <label className="block text-sm">Title</label>
                <input
                    type="text"
                    name="title"
                    value={form.title}
                    onChange={handleChange}
                    className="w-full border rounded p-2"
                />
            </div>

            <div className="mb-3">
                <label className="block text-sm">Caption</label>
                <textarea
                    name="caption"
                    value={form.caption}
                    onChange={handleChange}
                    className="w-full border rounded p-2"
                />
            </div>

            <div className="mb-3">
                <label className="block text-sm">Order</label>
                <input
                    type="number"
                    name="order"
                    value={form.order}
                    onChange={handleChange}
                    className="w-full border rounded p-2"
                />
            </div>

            <div className="mb-3">
                <label className="flex items-center gap-2">
                    <input
                        type="checkbox"
                        name="is_active"
                        checked={form.is_active}
                        onChange={handleChange}
                    />
                    Active
                </label>
            </div>

            <div className="mb-3">
                <label className="block text-sm">Image</label>
                <input type="file" accept="image/*" onChange={handleFile} />
                {slider?.image_path && (
                    <img
                        src={`/storage/${slider.image_path}`}
                        alt="preview"
                        className="h-20 mt-2"
                    />
                )}
            </div>

            <div className="flex justify-end gap-2 mt-4">
                <button
                    type="button"
                    onClick={closeModal}
                    className="px-4 py-2 bg-gray-400 text-white rounded"
                >
                    Cancel
                </button>
                <button
                    type="submit"
                    className="px-4 py-2 bg-blue-600 text-white rounded"
                >
                    {slider ? "Update" : "Create"}
                </button>
            </div>
        </form>
    );
}
