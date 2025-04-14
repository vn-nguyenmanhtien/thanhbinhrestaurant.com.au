import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import {
    CSSTransition,
    TransitionGroup,
  } from 'react-transition-group';
import '../../css/product.css';

import ProductModal from './ProductModal';

const useViewport = () => {
    const [width, setWidth] = useState(window.innerWidth);
  
    useEffect(() => {
      const handleWindowResize = () => setWidth(window.innerWidth);
      window.addEventListener("resize", handleWindowResize);
      return () => window.removeEventListener("resize", handleWindowResize);
    }, []);
  
    return {
      width
    };
};

function Products() {
    useEffect(() => {
        // Run! Like go get some data from an API.
        handleCategory();
      }, []);

    // Set the initial category state to empty array
    const [categories, setCategories] = useState([]);

    const [categoryId, setCategoryId] = useState(0);
    
    // Set the initial product state to empty array
    const [products, setProducts] = useState([]);

    const [productDetail, setProductDetail] = useState({});

    const [page, setPage] = useState(1);

    const [currentPage, setCurrentPage] = useState(1);

    const [activeButton, setActiveButton] = useState('');
    
    const viewPort = useViewport();
    const isMobile = viewPort.width <= 1024;

    // Notifies the server about the change
    const handleCategory = () => {
        axios.get('/api/category/list').then(res => {
            setCategories(res.data.data.categories);
            setProducts(res.data.data.products.data);
            setPage(res.data.data.products.last_page);
            setCategoryId(res.data.data.first_of_category_id);
            setActiveButton(res.data.data.first_of_category_id);
        }).catch((error) => {
            console.log(error);
        })
    }

    const handleProduct = (categoryId) => {
        setActiveButton(categoryId);

        axios.get(`/api/product/${categoryId}`).then(res => {
            setProducts(res.data.data.data);
            setPage(res.data.data.last_page);
            setCategoryId(categoryId);
            setCurrentPage(1);
        }).catch((error) => {
            console.log(error);
        })
    }

    const handleProductDetail = (productId) => {
        setProductDetail(products.filter(product=> product.id == productId));
    }

    const pageIncrement = (categoryId) => {
        // setActiveButton('increment');
        if (currentPage < page) {
            const nextPage = currentPage + 1;
            axios.get(`/api/product/${categoryId}?page=${nextPage}`).then(res => {
                setProducts(res.data.data.data);
                setCurrentPage(currentPage + 1);
            }).catch((error) => {
                console.log(error);
            })
        }
    }

    const pageDecrement = (categoryId) => {
        // setActiveButton('decrement');
        if (currentPage > 1) {
            const prePage = currentPage - 1;
            axios.get(`/api/product/${categoryId}?page=${prePage}`).then(res => {
                setProducts(res.data.data.data)
                setCurrentPage(currentPage - 1);
            }).catch((error) => {
                console.log(error);
            })
        }
    }

    return (
        <div className="row">
            <div className="col-12 col-md-3">
                <ul className="menu__sidebar menu__sidebar--items p-0" style={ isMobile ? { display:'flex', flexWrap: 'wrap', fontSize: '17px', listStyle: 'none'} : {listStyle: 'none'}}>
                    {categories.map((category,index)=>{
                        return <li key={index} onClick={() => {handleProduct(category.id) }}><a  className={`${category.id === activeButton ? 'active' : ''}`}>{category.name}</a></li>
                    })}
                </ul>
            </div>
            <div className='col-12 col-md-9'>
                <div className='products'>
                        <TransitionGroup component="div" className='row'>
                            {products.map(
                            ({ id, name, avatar, title_description, price }) => (
                                <CSSTransition
                                timeout={300}
                                classNames="fade"
                                key={id}
                                >
                                <div className='col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-2 col-6 mt-4'>
                                        <div className='box'>
                                        <img src={avatar ? `/storage/${avatar}` : "/storage/products/product-default.png"} />
                                        
                                        <div className='info'>
                                            <h3>{name}</h3>
                                            <p>{title_description?.length > 100 ? title_description.substring(0, 100).trimEnd() + '...' : title_description}</p>
                                            <div className='d-flex justify-content-between box-bottom'>
                                                <div className='price'>
                                                    {price ? `$${price}` : ''}
                                                </div>
                                                <button className='btn btn-outline-primary view-image d-flex flex-nowrap' 
                                                        type="button" data-bs-toggle="modal" data-bs-target="#productDetail"
                                                        onClick={ () => {handleProductDetail(id)}}>
                                                    <span>
                                                        More infomation
                                                    </span>
                                                    <img src="/images/icon-arrow-left.png"/>
                                                </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </CSSTransition>
                            )
                            )}
                        </TransitionGroup>


                    {/* <div className='row'>
                        {products.map((product, index) => {
                            return <div className='col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-2 col-6 mt-4' key={index}>
                                <div className='box'>
                                <img src={product.main_image} />
                                <div className='info'>
                                    <h3>{product.name}</h3>
                                    <p>{product.title_description}</p>
                                    <div className='d-flex justify-content-between'>
                                        <div className='price'>
                                            {product.price}
                                        </div>
                                        <button className='btn btn-outline-primary view-image d-flex flex-nowrap' 
                                                type="button" data-bs-toggle="modal" data-bs-target="#productDetail"
                                                onClick={ () => {handleProductDetail(product.id)}}>
                                            <span>
                                                More infomation
                                            </span>
                                            <img src="/images/icon-arrow-left.png"/>
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        })}

                        {products.length > 0 &&
                            <div className='col-12 d-flex justify-content-end mt-5'>
                                <span className={`arrow-pre ${activeButton == 'decrement' ? 'btn-active' : ''}`} onClick={() => {pageDecrement(categoryId)}}></span>
                                <span className={`arrow-next ${activeButton == 'increment' ? 'btn-active' : ''}`} onClick={() => {pageIncrement(categoryId)}}></span>
                            </div>
                        }
                    </div> */}
                </div>
            </div>
            <ProductModal product={productDetail} />
        </div>
    );
}
export default Products;
// DOM element
if (document.getElementById('products')) {
    ReactDOM.render(<Products />, document.getElementById('products'));
}

