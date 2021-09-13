import React from "react";

const Select = ({
    options = [{ id: "", nombre: "" }],
    placeholder = "Selecciona una opción",
    onChange,
}) => { const handleChange = (event) => { if (onChange) onChange(event.target.value);};

    return (
        <select
            onChange={handleChange}
            id="inputState"
            className="form-control">
        <option defaultValue="">{placeholder}</option>
            {options.map((item) => {
            return (
                <option key={item.id.toString()} value={item.id}>
                    {item.nombre}
                </option>);
            })}
        </select>
    );
};

export default Select;
