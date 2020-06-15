package com.craftorm.ecommerce.model;

import org.jetbrains.annotations.NotNull;

import javax.persistence.*;

@Entity
public class Product {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    public Product(Long id,@NotNull String name, Double price, String pictureUrl) {
        this.id=id;
        this.name = name;
        this.price = price;
        this.pictureUrl = pictureUrl;
    }

    @NotNull
    @Basic(optional=false)
    private String name;
    private Double price;

    private String pictureUrl;


    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Double getPrice() {
        return price;
    }

    public void setPrice(Double price) {
        this.price = price;
    }

    public String getPictureUrl() {
        return pictureUrl;
    }

    public void setPictureUrl(String pictureUrl) {
        this.pictureUrl = pictureUrl;
    }

}
