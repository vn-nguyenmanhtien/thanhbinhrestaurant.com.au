import React from "react";
import AliceCarousel from "react-alice-carousel";

const handleDragStart = (e) => e.preventDefault();

const items = [
    <img
        src="https://images.unsplash.com/photo-1491555103944-7c647fd857e6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
        onDragStart={handleDragStart}
        role="presentation"
    />,
    <img
        src="https://images.unsplash.com/photo-1485470733090-0aae1788d5af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1391&q=80"
        onDragStart={handleDragStart}
        role="presentation"
    />,
    <img
        src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
        onDragStart={handleDragStart}
        role="presentation"
    />,
];

function ProductModal(props) {
    const product = props.product[0];
    return (
        <>
            <div
                className="modal fade"
                id="productDetail"
                tabIndex="-1"
                aria-hidden="true"
            >
                <div className="modal-dialog modal-dialog-centered modal-lg">
                    <div className="modal-content">
                        {/* <div className="modal-header">
                    <h5 className="modal-title">{product ? product.name : ''}</h5>
                    <button type="button" className="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> */}
                        {/* <div className="modal-body">
                    ...
                    </div>
                    <div className="modal-footer">
                </div> */}
                        {/* <button type="button" className="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button> */}

                        <div
                            id="carouselExampleCaptions"
                            className="carousel slide"
                            data-bs-ride="carousel"
                        >
                            <div className="carousel-inner">
                                {product?.avatar && (
                                    <div
                                        className="carousel-item active bg-1"
                                        style={{
                                            backgroundImage:
                                                "url(" +
                                                `/storage/${product?.avatar}` +
                                                ")",
                                            backgroundPosition: "center",
                                            backgroundSize: "cover",
                                            backgroundRepeat: "no-repeat",
                                        }}
                                    >
                                        <div className="carousel-caption">
                                            {/* <h5>Best In <span className="text-warning">Tourism</span></h5> */}
                                            {/* <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p> */}
                                            {/* <a href="#" className="bg-warning text-white">Learn More</a> */}
                                        </div>
                                    </div>
                                )}

                                {product?.image_1 && (
                                    <div
                                        className="carousel-item bg-2"
                                        style={{
                                            backgroundImage:
                                                "url(" +
                                                `/storage/${product?.image_1}` +
                                                ")",
                                            backgroundPosition: "center",
                                            backgroundSize: "cover",
                                            backgroundRepeat: "no-repeat",
                                        }}
                                    >
                                        <div className="carousel-caption">
                                            {/* <h5>Worldwide <span className="text-warning">Recognition</span></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p>
                                <a href="#" className="bg-warning text-white">Learn More</a> */}
                                        </div>
                                    </div>
                                )}

                                {product?.image_2 && (
                                    <div
                                        className="carousel-item bg-3"
                                        style={{
                                            backgroundImage:
                                                "url(" +
                                                `/storage/${product?.image_2}` +
                                                ")",
                                            backgroundPosition: "center",
                                            backgroundSize: "cover",
                                            backgroundRepeat: "no-repeat",
                                        }}
                                    >
                                        <div className="carousel-caption">
                                            {/* <h5>Effordable <span className="text-warning">Budget</span></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p>
                                <a href="#" className="bg-warning text-white">Learn More</a> */}
                                        </div>
                                    </div>
                                )}

                                {product?.image_3 && (
                                    <div
                                        className="carousel-item bg-4"
                                        style={{
                                            backgroundImage:
                                                "url(" +
                                                `/storage/${product?.image_3}` +
                                                ")",
                                            backgroundPosition: "center",
                                            backgroundSize: "cover",
                                            backgroundRepeat: "no-repeat",
                                        }}
                                    >
                                        <div className="carousel-caption">
                                            {/* <h5>Effordable <span className="text-warning">Budget</span></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p>
                                <a href="#" className="bg-warning text-white">Learn More</a> */}
                                        </div>
                                    </div>
                                )}
                                {product?.image_4 && (
                                    <div
                                        className="carousel-item bg-5"
                                        style={{
                                            backgroundImage:
                                                "url(" +
                                                `/storage/${product?.image_4}` +
                                                ")",
                                            backgroundPosition: "center",
                                            backgroundSize: "cover",
                                            backgroundRepeat: "no-repeat",
                                        }}
                                    >
                                        <div className="carousel-caption">
                                            {/* <h5>Effordable <span className="text-warning">Budget</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p>
                                            <a href="#" className="bg-warning text-white">Learn More</a> */}
                                        </div>
                                    </div>
                                )}
                                {product?.image_5 && (
                                    <div
                                        className="carousel-item bg-6"
                                        style={{
                                            backgroundImage:
                                                "url(" +
                                                `/storage/${product?.image_5}` +
                                                ")",
                                            backgroundPosition: "center",
                                            backgroundSize: "cover",
                                            backgroundRepeat: "no-repeat",
                                        }}
                                    >
                                        <div className="carousel-caption">
                                            {/* <h5>Effordable <span className="text-warning">Budget</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p>
                                            <a href="#" className="bg-warning text-white">Learn More</a> */}
                                        </div>
                                    </div>
                                )}
                                {product?.image_6 && (
                                    <div
                                        className="carousel-item bg-7"
                                        style={{
                                            backgroundImage:
                                                "url(" +
                                                `/storage/${product?.image_6}` +
                                                ")",
                                            backgroundPosition: "center",
                                            backgroundSize: "cover",
                                            backgroundRepeat: "no-repeat",
                                        }}
                                    >
                                        <div className="carousel-caption">
                                            {/* <h5>Effordable <span className="text-warning">Budget</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p>
                                            <a href="#" className="bg-warning text-white">Learn More</a> */}
                                        </div>
                                    </div>
                                )}
                                {product?.image_7 && (
                                    <div
                                        className="carousel-item bg-8"
                                        style={{
                                            backgroundImage:
                                                "url(" +
                                                `/storage/${product?.image_7}` +
                                                ")",
                                            backgroundPosition: "center",
                                            backgroundSize: "cover",
                                            backgroundRepeat: "no-repeat",
                                        }}
                                    >
                                        <div className="carousel-caption">
                                            {/* <h5>Effordable <span className="text-warning">Budget</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p>
                                            <a href="#" className="bg-warning text-white">Learn More</a> */}
                                        </div>
                                    </div>
                                )}
                                {product?.image_8 && (
                                    <div
                                        className="carousel-item bg-9"
                                        style={{
                                            backgroundImage:
                                                "url(" +
                                                `/storage/${product?.image_8}` +
                                                ")",
                                            backgroundPosition: "center",
                                            backgroundSize: "cover",
                                            backgroundRepeat: "no-repeat",
                                        }}
                                    >
                                        <div className="carousel-caption">
                                            {/* <h5>Effordable <span className="text-warning">Budget</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p>
                                            <a href="#" className="bg-warning text-white">Learn More</a> */}
                                        </div>
                                    </div>
                                )}
                            </div>
                            <button
                                className="carousel-control-prev"
                                type="button"
                                data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev"
                            >
                                <span
                                    className="carousel-control-prev-icon"
                                    aria-hidden="true"
                                ></span>
                                <span className="visually-hidden">
                                    Previous
                                </span>
                            </button>
                            <button
                                className="carousel-control-next"
                                type="button"
                                data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next"
                            >
                                <span
                                    className="carousel-control-next-icon"
                                    aria-hidden="true"
                                ></span>
                                <span className="visually-hidden">Next</span>
                            </button>

                            <div className="carousel-indicators">
                                {product?.avatar && (
                                    <button
                                        type="button"
                                        data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="0"
                                        className="active"
                                        aria-current="true"
                                        aria-label="Slide 1"
                                    >
                                        <img
                                            className="d-block w-100 img-fluid"
                                            src={`/storage/${product?.avatar}`}
                                        />
                                    </button>
                                )}
                                {product?.image_1 && (
                                    <button
                                        type="button"
                                        data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="1"
                                        className="active"
                                        aria-current="true"
                                        aria-label="Slide 2"
                                    >
                                        <img
                                            className="d-block w-100 img-fluid"
                                            src={`/storage/${product?.image_1}`}
                                        />
                                    </button>
                                )}
                                {product?.image_2 && (
                                    <button
                                        type="button"
                                        data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="2"
                                        aria-label="Slide 3"
                                    >
                                        <img
                                            className="d-block w-100 img-fluid"
                                            src={`/storage/${product?.image_2}`}
                                        />
                                    </button>
                                )}
                                {product?.image_3 && (
                                    <button
                                        type="button"
                                        data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="2"
                                        aria-label="Slide 3"
                                    >
                                        <img
                                            className="d-block w-100 img-fluid"
                                            src={product?.image_3}
                                        />
                                    </button>
                                )}
                                {product?.image_4 && (
                                    <button
                                        type="button"
                                        data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="3"
                                        aria-label="Slide 4"
                                    >
                                        <img
                                            className="d-block w-100 img-fluid"
                                            src={product?.image_4}
                                        />
                                    </button>
                                )}
                                {product?.image_5 && (
                                    <button
                                        type="button"
                                        data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="4"
                                        aria-label="Slide 5"
                                    >
                                        <img
                                            className="d-block w-100 img-fluid"
                                            src={product?.image_5}
                                        />
                                    </button>
                                )}
                                {product?.image_6 && (
                                    <button
                                        type="button"
                                        data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="5"
                                        aria-label="Slide 6"
                                    >
                                        <img
                                            className="d-block w-100 img-fluid"
                                            src={product?.image_6}
                                        />
                                    </button>
                                )}
                                {product?.image_7 && (
                                    <button
                                        type="button"
                                        data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="6"
                                        aria-label="Slide 7"
                                    >
                                        <img
                                            className="d-block w-100 img-fluid"
                                            src={product?.image_7}
                                        />
                                    </button>
                                )}
                                {product?.image_8 && (
                                    <button
                                        type="button"
                                        data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="7"
                                        aria-label="Slide 8"
                                    >
                                        <img
                                            className="d-block w-100 img-fluid"
                                            src={product?.image_8}
                                        />
                                    </button>
                                )}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default ProductModal;
