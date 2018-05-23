package dombosco.dominio;

import java.io.Serializable;
import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import org.hibernate.annotations.UpdateTimestamp;

@Entity
public class Produto implements Serializable {

	private static final long serialVersionUID = 1L;
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;
	private float QntEstoque;
	private String Fornecedor;
	private float PrecoVenda;
	private String Unidade;
	private float PrecoCompra;
	private String CodigoBarras;
	private String CodigoReferencia;
	
	@Column(nullable = true, updatable = true)
    @Temporal(TemporalType.TIMESTAMP)
    @UpdateTimestamp
    private Date createdAt;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public float getQntEstoque() {
		return QntEstoque;
	}

	public void setQntEstoque(float qntEstoque) {
		QntEstoque = qntEstoque;
	}

	public String getFornecedor() {
		return Fornecedor;
	}

	public void setFornecedor(String fornecedor) {
		Fornecedor = fornecedor;
	}

	public float getPrecoVenda() {
		return PrecoVenda;
	}

	public void setPrecoVenda(float precoVenda) {
		PrecoVenda = precoVenda;
	}

	public String getUnidade() {
		return Unidade;
	}

	public void setUnidade(String unidade) {
		Unidade = unidade;
	}

	public float getPrecoCompra() {
		return PrecoCompra;
	}

	public void setPrecoCompra(float precoCompra) {
		PrecoCompra = precoCompra;
	}

	public String getCodigoBarras() {
		return CodigoBarras;
	}

	public void setCodigoBarras(String codigoBarras) {
		CodigoBarras = codigoBarras;
	}

	public String getCodigoReferencia() {
		return CodigoReferencia;
	}

	public void setCodigoReferencia(String codigoReferencia) {
		CodigoReferencia = codigoReferencia;
	}

	public Date getCreatedAt() {
		return createdAt;
	}

	public void setCreatedAt(Date createdAt) {
		this.createdAt = createdAt;
	}

	public static long getSerialversionuid() {
		return serialVersionUID;
	}
	
	
	
	


	
	

}
