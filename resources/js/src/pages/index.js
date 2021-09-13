import React, { useEffect, useState } from "react";
import Select from "../components/Select";
import "./Index.css";

const URL = "http://127.0.0.1:8000/api";
const REGIONES_ROUTE = "regiones";
const PROVINCIAS_ROUTE = "provincias";
const CIUDADES_ROUTE = "ciudades";
const CALLES_ROUTE = "calles";

const Home = () => {
    const [regiones, setRegiones] = useState([]);
    const [provincias, setProvincias] = useState([]);
    const [ciudades, setCiudades] = useState([]);
    const [calles, setCalles] = useState([]);
    const [isLoading, setIsLoading] = useState(false);

    const getRegiones = async () => {
        setIsLoading(true);
        const endpoint = `${URL}/${REGIONES_ROUTE}`;
        const response = await fetch(endpoint);
        const responseJson = await response.json();
        setRegiones(responseJson);
        setIsLoading(false);
    };

    const provinciasXregion = async (regionid) => {
        setIsLoading(true);
        const endpoint = `${URL}/${PROVINCIAS_ROUTE}/${REGIONES_ROUTE}/${regionid}`;
        const response = await fetch(endpoint);
        const responseJson = await response.json();
        setProvincias(responseJson);
        setIsLoading(false);
    };

    const ciudadesXprovincia = async (provinciaid) => {
        const endpoint = `${URL}/${CIUDADES_ROUTE}/${PROVINCIAS_ROUTE}/${provinciaid}`;
        const response = await fetch(endpoint);
        const responseJson = await response.json();
        setCiudades(responseJson);
    };

    const callesXciudad = async (ciudadid) => {
        const endpoint = `${URL}/${CALLES_ROUTE}/${CIUDADES_ROUTE}/${ciudadid}`;
        const response = await fetch(endpoint);
        const responseJson = await response.json();
        setCalles(responseJson);
    };

    const handleChangeRegion = (regionid) => {
        provinciasXregion(regionid);
        setCalles([]);
    };

    const handleChangeProvincia = (provinciaid) => {
        ciudadesXprovincia(provinciaid);
        setCalles([]);
    };

    const handleChangeCiudad = (ciudadid) => {
        callesXciudad(ciudadid);
    };

    useEffect(() => {
        getRegiones();
    }, []);

    return (
        <>
        <header>
            <div class="titulo">
                <h1>Búsqueda de calles</h1>
            </div>
        </header>
        <main>
            <section id="selects-data">
                <div className="container mt-5">
                    <div className="row">
                        <div className="col">
                            {isLoading && (
                                <div
                                    className="spinner-border text-primary"
                                    role="status">
                                    <span className="visually-hidden"></span>
                                </div>)}
                        </div>
                        </div>
                        <div className="row">
                            <div className="col">
                                <form>
                                    <div className="row">
                                        <div className="col-4">
                                            <label htmlFor="regiones">
                                                Regiones
                                            </label>
                                            <Select
                                                placeholder="Seleccione una región"
                                                onChange={handleChangeRegion}
                                                options={regiones}
                                            />
                                        </div>
                                        <div className="col-4">
                                            <label htmlFor="provincias">
                                                Provincias
                                            </label>
                                            <Select
                                                placeholder="Seleccione una provincia"
                                                onChange={handleChangeProvincia}
                                                options={provincias}
                                            />
                                        </div>
                                        <div className="col-4">
                                            <label htmlFor="ciudades">
                                                Ciudades
                                            </label>
                                            <Select
                                                placeholder="Seleccione una ciudad"
                                                onChange={handleChangeCiudad}
                                                options={ciudades}
                                            />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                {calles.length > 0 && (
                    <section className="container">
                        <div className="row mt-5">
                            <div className="col">
                                <h1>Calles</h1>
                            </div>
                        </div>
                        <div className="row mt-1">
                            {calles.map((item) => {
                                return (
                                    <div className="col-auto">
                                        <span
                                            key={item.id}
                                            className="badge badge-pill"
                                        >
                                            {item.nombre}
                                        </span>
                                    </div>
                                );
                            })}
                        </div>
                    </section>
                )}
            </main>
        </>
    );
};

export default Home;
