package com.marsh.service;

import com.marsh.bean.Customer;
import com.marsh.dao.BankingDao;
import com.marsh.dao.BankingDaoImpl;

public class BankingServiceImpl implements BankingService {
	private BankingDao bDao;
	
	public BankingServiceImpl() {
		bDao = new BankingDaoImpl();
	}

	@Override
	public boolean createCustomer(Customer cust) {
		return bDao.createCustomer(cust);
	}

	@Override
	public double getBalance(long accNo) {
		return bDao.getBalance(accNo);
	}

	
	@Override
	public long getAccNo(long accNo1) {
		// TODO Auto-generated method stub
		return bDao.getAccNo(accNo1);
	}

	@Override
	public double setBalance(long acc, double amt) {
		// TODO Auto-generated method stub
		return bDao.setBalance(acc, amt);
	}


	

}
